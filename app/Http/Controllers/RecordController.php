<?php

namespace App\Http\Controllers;

use App\Record;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */

    public function index()
    {
        //
        return view('records.index');
    }

    /**
     * Returns list of records via json
     *
     * @return array
     */
    public function json()
    {
        //
        return Laratables::recordsOf(Record::class, function ($query) {
            return $query->where('user_id', Auth::id());
        });
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function advanced()
    {
        return view('records.advanced');
    }

    /**
     * @return mixed
     */
    public function search(Request $request)
    {

        $columns = [
            'isrc',
            'label',
            'artist',
            'product_title',
            'country',
            'start_at',
            'end_at'
        ];

        return Record::where(function ($query) use ($columns, $request) {
            foreach ($columns as $column) {
                $request->$column !== null ? $query->whereIn($column,
                    explode(',', $request->$column)) : null;
            }
        })->orderBy($request->order ?: 'id')->paginate(20);

    }

    public function options($column)
    {
        if (!in_array($column, [
            'isrc',
            'label',
            'artist',
            'product_title',
            'country',
            'start_at',
            'end_at'
        ])
        ) {
            abort(404);
        }
        return response()->json(Record::distinct()->orderBy($column)
            ->pluck($column));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Record $record
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        //
        return view('records.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Record $record
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Record              $record
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Record $record
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        //
    }
}
