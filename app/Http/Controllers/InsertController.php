<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class InsertController extends Controller
{
    public function getRecord(){
    	return view('thongke');
    }
}
