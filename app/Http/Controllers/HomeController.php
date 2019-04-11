<?php

namespace App\Http\Controllers;

use App\Record;
use App\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $records = Record::where('user_id', Auth::id())->get();
        $uploads = Upload::where('user_id', Auth::id())->get();

        return view('home', compact('records', 'uploads'));
    }
}
