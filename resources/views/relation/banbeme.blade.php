@extends('master')
@section('css')
<link rel="stylesheet" href="{{asset('app/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
@endsection
@section('content')
<div class="animated fadeIn">
	<div class="row">

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
							@php
							$organs = ['Đồn Hữu Nghị','Đồn Tân Thanh','Đồn Bình Nghi','Đồn Na Hình','Đồn Pò Mã','Đồn Chi Ma','Đồn Chi Lăng','Đồn Ba Sơn','Đồn Bắc Sa','Đồn Bảo Lâm','Đồn Thanh Lòa','Bộ chỉ Huy LS','Bộ Tư Lệnh','Học Viện Biên Phòng','Khác...'];
							$relations = ['Biên Phòng','Họ Hàng','Hàng Xóm','Doanh Nghiệp','Bạn bè Bố','Bạn bè Mẹ','Bạn bè Dũng','Khác...'];
							$prices = ['5 Trăm VNĐ','3 Trăm VNĐ','1 Triệu VNĐ','2 Triệu VNĐ','3 Triệu VNĐ','5 Triệu VNĐ','10 Triệu VNĐ','... khác','$'];
							@endphp
							@foreach($records as $record)
							<tr>
								<td>{{$record->id}}</td>
								<td>{{$record->name}}</td>
								<td>{{$relations[$record->relation]}} @if($record->relation == 0)- {{$organs[$record->organ - 1] }}@endif</td>
								<td>{{$prices[$record->price]}}</td>
							</tr>
							@endforeach

						</tbody>
					</table>
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

@endsection