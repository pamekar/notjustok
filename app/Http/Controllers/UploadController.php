<?php

namespace App\Http\Controllers;

use App\Imports\RecordsImport;
use App\Imports\RecordsWithHeaderImport;
use App\Upload;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('uploads.index');
    }

    /**
     * Returns list of records via json
     *
     * @return array
     */
    public function json()
    {
        //
        return Laratables::recordsOf(Upload::class, function ($query) {
            return $query->where('user_id', Auth::id());
        });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('uploads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->hasFile('records')) {
            $upload = Upload::create([
                'user_id'     => Auth::id(),
                'title'       => $request->title,
                'batch_code'  => "rec-" . date('ymdHis'),
                'description' => $request->description
            ]);

            $records = $request->first_row_header ? new RecordsWithHeaderImport
                : new RecordsImport();
            $records->setUploadId($upload->id);

            Excel::import($records, $request->file('records'));

            $rowCount = $records->getRowCount();

            $upload->row_count = $rowCount;
            $upload->save();

            return redirect('uploads')
                ->with('notification', [
                    'type'    => 'success',
                    'message' => "Our system accepted your data. Congrats, $rowCount rows have been added to your records. :)"
                ]);
        }
        return abort(500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Upload $upload
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Upload $upload
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Upload              $upload
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Upload $upload
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
        //
    }
}
