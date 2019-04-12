<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadsController extends Controller
{
    //
    public function newUpload(){
        return view('new_upload');
    }
}
