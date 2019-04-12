<?php

namespace App\Http\Controllers;

use App\Record;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordsController extends Controller
{
    //
    public function index(){
        return view('js_records');
    }

    public function json(){
        return Laratables::recordsOf(Record::class,function($query){
            return $query->where('user_id',Auth::id());
        });
    }
}
