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
        $prices = [500,300,1000,2000,3000,5000,10000,20000,'$'];
        $relations = ['Biên Phòng','Họ Hàng','Hàng Xóm','Doanh Nghiệp','Bạn bè Bố','Bạn bè Mẹ','Bạn bè Dũng','Khác...'];

        $total_revenue_vn = 0;
        $total_revenue_dollar = 0;


        $num_of_relation = [];
        foreach ($relations as $key => $relation) {
            $item = [];
            $records2 = Record::where('relation','=',$key)->get();
            $item['label'] = $relation;
            $item['num'] = count($records2);
            $num_of_relation[] = $item;
        }
        $total_records = count($records);


        $num_of_prices = [];
        foreach ($prices as $key => $price) {
            $item1 = [];
            $records1 = Record::where('price','=',$key)->get();
            $item['label'] = $price;
            $item['num'] = count($records1);
            $num_of_prices[] = $item;
            if($key<8){

                $num = count($records1) * $prices[$key];
                $total_revenue_vn += $num ;
            }else{
                foreach ($records1 as $key => $record) {
                    $total_revenue_dollar += $record['dollar'];
                }
                
            }
        }


        $revenue = [
            "total_revenue_vn" => $total_revenue_vn,
            "total_revenue_dollar" => $total_revenue_dollar
        ];
        

        // return $revenue;

    	return view('thongke',compact('records','revenue','num_of_relation','num_of_prices'));
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
        $organs = ['Đồn Hữu Nghị','Đồn Tân Thanh','Đồn Bình Nghi','Đồn Na Hình','Đồn Pò Mã','Đồn Chi Ma','Đồn Chi Lăng','Đồn Ba Sơn','Đồn Bắc Sa','Đồn Bảo Lâm','Đồn Thanh Lòa','Bộ chỉ Huy LS','Bộ Tư Lệnh','Học Viện Biên Phòng','Khác...'];
        $prices = [500,300,1000,2000,3000,5000,10000,20000,'$'];

        $total_revenue_vn = 0;
        $total_revenue_dollar = 0;
        foreach ($prices as $key => $price) {
            $item1 = [];
            $records1 = Record::where('price','=',$key)->where('relation','=',0)->get();
            $item['label'] = $price;
            $item['num'] = count($records1);
            $num_of_prices[] = $item;
            if($key<8){

                $num = count($records1) * $prices[$key];
                $total_revenue_vn += $num ;
            }else{
                foreach ($records1 as $key => $record) {
                    $total_revenue_dollar += $record['dollar'];
                }
                
            }
        }

        $data_each_organ = [];
        foreach ($organs as $key => $organ) {
            $id = $key+1;
            $record_organ =  Record::where('organ','=',$id)->where('relation','=',0)->get();
            $data_each_organ[$key] = $record_organ;
        }
       
        $revenue = [
            "total_revenue_vn" => $total_revenue_vn,
            "total_revenue_dollar" => $total_revenue_dollar
        ];
        $records = Record::where('relation','=',0)->get();
        return view('relation/bienphong',compact('records','revenue','data_each_organ'));
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
        $array_of_data = Array(
            Array(1,
                'Dave',
                'Smith',
                'dave[at]dave.com'
            ),
            Array(2,
                'Sam',
                'Adams',
                'sam[@]adams.com'
            ),
            Array(3,
                'Gary',
                'Davis',
                'gary[at]davis.com'
            )
        );
        $this->convert_to_csv(json_decode($records,true), 'data_as_csv.csv', ',');
    }
    public function convert_to_csv($input_array, $output_file_name, $delimiter)
    {
        $temp_memory = fopen('php://memory', 'w');
        foreach ($input_array as $line) {
            fputcsv($temp_memory, $line, $delimiter);
        }

        fseek($temp_memory, 0);
        header('Content-Type: application/csv');
        header('Content-Disposition: attachement; filename="' . $output_file_name . '";');
        fpassthru($temp_memory);
    }
}
