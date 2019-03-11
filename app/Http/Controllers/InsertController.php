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
        $relations = ['Biên Phòng','Họ Hàng','Hàng Xóm','Doanh Nghiệp','Bạn bè Bố','Bạn bè Mẹ','Bạn bè Dũng','Khác...'];
        $num_of_relation = [];
        foreach ($relations as $key => $relation) {
            $records = Record::where('relation','=',$key)->get();
            $num_of_relation[$relation] = count($records);
        }
        $total_records = count(Record::all());
        return view('overview',compact('num_of_relation','total_records'));
    }
    public function getListBienPhong(){
        $records = Record::where('relation','=',0)->get();
        return view('relation/bienphong',compact('records'));
    }
    public function getListHoHang(){
        $records = Record::where('relation','=',1)->get();
        return view('relation/hohang',compact('records'));
    }
    public function getListHangXom(){
        $records = Record::where('relation','=',2)->get();
        return view('relation/hangxom',compact('records'));
    }
    public function getListDoanhNghiep(){
        $records = Record::where('relation','=',3)->get();
        return view('relation/doanhnghiep',compact('records'));
    }
    public function getListBanBeBo(){
        $records = Record::where('relation','=',4)->get();
        return view('relation/banbebo',compact('records'));
    }
    public function getListBanBeMe(){
        $records = Record::where('relation','=',5)->get();
        return view('relation/banbeme',compact('records'));
    }
    public function getListBanBeDung(){
        $records = Record::where('relation','=',6)->get();
        return view('relation/banbedung',compact('records'));
    }
    public function getListKhac(){
        $records = Record::where('relation','=',7)->get();
        return view('relation/khac',compact('records'));
    }

    public function getTestCsv(){
        $records = Record::where('relation','=',0)->get();
        $data = array(
         array(1, 2, 4),
         array('test string', 'test, literal, comma', 'test literal "quotes"'),
     );
         $this->generateCsv($data);
    }
    public function generateCsv($data, $delimiter = ',', $enclosure = '"') {
        // var_dump($data);die;
       $handle = fopen('php://temp', 'r+');
       foreach ($data as $line) {
               fputcsv($handle, $line, $delimiter, $enclosure);
       }
       rewind($handle);
       while (!feof($handle)) {
               $contents .= fread($handle, 8192);
       }
       fclose($handle);
       return $contents;
    }
}
