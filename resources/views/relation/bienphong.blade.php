@extends('master')
@section('css')
<link rel="stylesheet" href="{{asset('app/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
<style type="text/css">
	.nav-tabs .nav-link.active{
		background-color: #eee;
	}
</style>
@endsection
@section('content')

@php
$organs = ['Đồn Hữu Nghị','Đồn Tân Thanh','Đồn Bình Nghi','Đồn Na Hình','Đồn Pò Mã','Đồn Chi Ma','Đồn Chi Lăng','Đồn Ba Sơn','Đồn Bắc Sa','Đồn Bảo Lâm','Đồn Thanh Lòa','Bộ chỉ Huy LS','Bộ Tư Lệnh','Học Viện Biên Phòng','Khác...'];
$tabs_id = ['huunghi-tab','tanthanh-tab','binhnghi-tab','nahinh-tab','poma-tab','chima-tab','chilang-tab','bason-tab','bacsa-tab','baolam-tab','thanhloa-tab','bchls-tab','btl-tab','hvbp-tab','khac-tab'];
$relations = ['Biên Phòng','Họ Hàng','Hàng Xóm','Doanh Nghiệp','Bạn bè Bố','Bạn bè Mẹ','Bạn bè Dũng','Khác...'];
$prices = ['5 Trăm VNĐ','3 Trăm VNĐ','1 Triệu VNĐ','2 Triệu VNĐ','3 Triệu VNĐ','5 Triệu VNĐ','10 Triệu VNĐ','... khác','$'];
@endphp
<div class="col-lg-4 col-md-6">
	<div class="card">
		<div class="card-body">
			<div class="stat-widget-one">
				<div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
				<div class="stat-content dib">
					<div class="stat-text">Tổng Khách</div>
					<div class="stat-digit">{{count($records)}}</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-4 col-md-6">
	<div class="card">
		<div class="card-body">
			<div class="stat-widget-one">
				<div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
				<div class="stat-content dib">
					<div class="stat-text">Tổng Thu (VNĐ)</div>
					<div class="stat-digit" id="total-vnd">{{$revenue['total_revenue_vn']}}000 VNĐ</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="col-lg-4 col-md-6">
	<div class="card">
		<div class="card-body">
			<div class="stat-widget-one">
				<div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
				<div class="stat-content dib">
					<div class="stat-text">Tổng Thu ($)</div>
					<div class="stat-digit">{{$revenue['total_revenue_dollar']}} $</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="animated fadeIn">

		<div class="col-md-12">
			<div class="card">
				<div class="card-header" id="card-header-table">
					<strong class="card-title col-md-3">Bảng Thống Kê</strong>
					<!-- <div class="form-group col-md-6" id="form-select">
						<label for="exampleInputEmail2" class="px-1  form-control-label col-md-4">Thống Kê Theo <strong>Quan Hệ</strong></label>
						<select name="selectFilter" id="selectFilter" class="form-control col-md-8">
							<option value="all">Tất cả</option>
							<option value="0">Biên Phòng</option>
							<option value="1">Họ Hàng</option>
							<option value="2">Hàng Xóm</option>
							<option value="3">Doanh Nghiệp</option>
							<option value="4">Bạn bè Bố</option>
							<option value="5">Bạn bè Mẹ</option>
							<option value="6">Bạn bè Dũng</option>
							<option value="7">Khác...</option>
						</select>
					</div>
					<button class="btn btn-primary col-md-3">Xuất Exel</button> -->
				</div>
				<div class="card-body">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="all-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tất Cả</a>
						</li>
						@foreach($tabs_id as $key=>$tab)
						<li class="nav-item">
							<a class="nav-link" id="{{$tab}}" data-toggle="tab" href="#{{substr($tab,0,-4)}}" role="tab" aria-controls="profile" aria-selected="false">{{$organs[$key]}}</a>
						</li>
						@endforeach
						
					</ul>
					<div class="tab-content pl-3 p-1" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="all-tab">
							<table id="bootstrap-data-table" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Tên</th>
										<th>Cơ Quan</th>
										<th>Mệnh Giá</th>

									</tr>
								</thead>
								<tbody id="content-table">
									
									@foreach($records as $record)
									<tr>
										<td>{{$record->id}}</td>
										<td>{{$record->name}}</td>
										<td>{{$relations[$record->relation]}} @if($record->relation == 0)- {{$organs[$record->organ - 1] }}@endif</td>
										<td>
											
											@if($record->price == 8)
											{{$record->dollar }}{{$prices[$record->price]}}
											@elseif($record->price == 7)
											20 Triệu VNĐ
											@else
											{{$prices[$record->price]}}
											@endif 
										</td>
									</tr>
									@endforeach

								</tbody>
							</table>
						</div>
						@foreach($tabs_id as $key1=>$tab1)
						<div class="tab-pane fade" id="{{substr($tab1,0,-4)}}" role="tabpanel" aria-labelledby="{{$tab1}}">
							<table id="bootstrap-data-table{{$key1}}" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Tên</th>
										<th>Cơ Quan</th>
										<th>Mệnh Giá</th>

									</tr>
								</thead>
								<tbody id="content-table">
									@foreach($data_each_organ[$key1] as $record)
									<tr>
										<td>{{$record->id}}</td>
										<td>{{$record->name}}</td>
										<td>{{$relations[$record->relation]}} @if($record->relation == 0)- {{$organs[$record->organ - 1] }}@endif</td>
										<td>
											
											@if($record->price == 8)
											{{$record->dollar }}{{$prices[$record->price]}}
											@elseif($record->price == 7)
											20 Triệu VNĐ
											@else
											{{$prices[$record->price]}}
											@endif 
										</td>
									</tr>
									@endforeach

								</tbody>
							</table>
						</div>
						@endforeach
					</div>
					
				</div>
			</div>
		</div>


</div><!-- .animated -->
@endsection
@section('script')

<script src="{{asset('app/assets/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{asset('app/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('app/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('app/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('app/assets/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{asset('app/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
<script src="{{asset('app/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{asset('app/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{asset('app/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{asset('app/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
<script src="{{asset('app/assets/js/lib/data-table/datatables-init.js')}}"></script>
<script src="{{asset('js/vendor/jquery.bootstrap-growl.min.js')}}"></script>
<script type="text/javascript">

</script>
@endsection