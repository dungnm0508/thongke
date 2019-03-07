<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use DateTime;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InsertController extends Controller
{
    public function getRecord(){
    	$records = Record::all();
    	return view('thongke',compact('records'));
    }
    public function postInsertRecord(Request $request){
    	try{
    		$record = new Record;
    		$record->name = $request->name;
    		$record->price = $request->price;
    		$record->relation = $request->relation;
    		$record->organ = $request->organ;
    		$record->created_at = new Datetime;
    		$record->save(); 
    		return ['message'=>'Thêm thành công!'];
    	}
    	catch(\Exception $e){
    		return $e->getMessage();   
    	}
    	
    }
    public function postDelete(Request $request){

    	$record = Record::find($request->id);

    	$record->delete();
    	return ['message'=>'Xóa thành công!'];
    }
    public function getMaster(){
        return view('master');
    }
     public function getOverview(){
        return view('overview');
    }
}
