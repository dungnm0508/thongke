
@extends('master')

@section('css')
<style type="text/css">
	.card{
		cursor: pointer;
	}

</style>
@endsection

@section('content')
<?php 
	$relations = ['Biên Phòng','Họ Hàng','Hàng Xóm','Doanh Nghiệp','Bạn bè Bố','Bạn bè Mẹ','Bạn bè Dũng','Khác...'];
	$tags = ['bienphong','hohang','hangxom','doanhnghiep','banbebo','banbeme','banbedung','khac'];
 ?>
<div class="col-sm-6 col-lg-3">
	<div class="card text-white bg-flat-color-1">
		<div class="card-body pb-0">
			<div class="dropdown float-right">
				<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
					<i class="fa fa-cog"></i>
				</button>
				<!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<div class="dropdown-menu-content">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div> -->
			</div>
			<h4 class="mb-0">
				<span class="count">{{$num_of_relation[$relations[0]]}}</span>
			</h4>
			<p class="text-light">Người tham dự</p>
			
			<div class="chart-wrapper px-0" style="height:70px;" height="70">
				<h2>{{$relations[0]}}</h2>
			</div>

		</div>
	</div>
</div>

<!--/.col-->

<div class="col-sm-6 col-lg-3">
	<div class="card text-white bg-flat-color-2">
		<div class="card-body pb-0">
			<div class="dropdown float-right">
				<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
					<i class="fa fa-cog"></i>
				</button>
				<!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<div class="dropdown-menu-content">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div> -->
			</div>
			<h4 class="mb-0">
				<span class="count">{{$num_of_relation[$relations[1]]}}</span>
			</h4>
			<p class="text-light">Người tham dự</p>

			<div class="chart-wrapper px-0" style="height:70px;" height="70">
				<h2>{{$relations[1]}}</h2>
			</div>

		</div>
	</div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
	<div class="card text-white bg-flat-color-3">
		<div class="card-body pb-0">
			<div class="dropdown float-right">
				<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
					<i class="fa fa-cog"></i>
				</button>
				<!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<div class="dropdown-menu-content">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div> -->
			</div>
			<h4 class="mb-0">
				<span class="count">{{$num_of_relation[$relations[2]]}}</span>
			</h4>
			<p class="text-light">Người tham dự</p>
			<div class="chart-wrapper px-0" style="height:70px;" height="70">
				<h2>{{$relations[2]}}</h2>
			</div>
		</div>

		
	</div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
	<div class="card text-white bg-flat-color-4">
		<div class="card-body pb-0">
			<div class="dropdown float-right">
				<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
					<i class="fa fa-cog"></i>
				</button>
				<!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<div class="dropdown-menu-content">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div> -->
			</div>
			<h4 class="mb-0">
				<span class="count">{{$num_of_relation[$relations[3]]}}</span>
			</h4>
			<p class="text-light">Người tham dự</p>

			<div class="chart-wrapper px-0" style="height:70px;" height="70">
				<h2>{{$relations[3]}}</h2>
			</div>

		</div>
	</div>
</div>
<!--/.col-->
<div class="col-sm-6 col-lg-3">
	<div class="card text-white bg-flat-color-5">
		<div class="card-body pb-0">
			<div class="dropdown float-right">
				<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
					<i class="fa fa-cog"></i>
				</button>
				<!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<div class="dropdown-menu-content">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div> -->
			</div>
			<h4 class="mb-0">
				<span class="count">{{$num_of_relation[$relations[4]]}}</span>
			</h4>
			<p class="text-light">Người tham dự</p>

			<div class="chart-wrapper px-0" style="height:70px;" height="70">
				<h2>{{$relations[4]}}</h2>
			</div>

		</div>
	</div>
</div>
<!--/.col-->
<div class="col-sm-6 col-lg-3">
	<div class="card text-white bg-flat-color-1">
		<div class="card-body pb-0">
			<div class="dropdown float-right">
				<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
					<i class="fa fa-cog"></i>
				</button>
				<!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<div class="dropdown-menu-content">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div> -->
			</div>
			<h4 class="mb-0">
				<span class="count">{{$num_of_relation[$relations[5]]}}</span>
			</h4>
			<p class="text-light">Người tham dự</p>

			<div class="chart-wrapper px-0" style="height:70px;" height="70">
				<h2>{{$relations[5]}}</h2>
			</div>

		</div>
	</div>
</div>
<!--/.col-->
<div class="col-sm-6 col-lg-3">
	<div class="card text-white bg-flat-color-2">
		<div class="card-body pb-0">
			<div class="dropdown float-right">
				<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
					<i class="fa fa-cog"></i>
				</button>
				<!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<div class="dropdown-menu-content">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div> -->
			</div>
			<h4 class="mb-0">
				<span class="count">{{$num_of_relation[$relations[6]]}}</span>
			</h4>
			<p class="text-light">Người tham dự</p>

			<div class="chart-wrapper px-0" style="height:70px;" height="70">
				<h2>{{$relations[6]}}</h2>
			</div>

		</div>
	</div>
</div>
<div class="col-sm-6 col-lg-3">
	<div class="card text-white bg-flat-color-3">
		<div class="card-body pb-0">
			<div class="dropdown float-right">
				<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
					<i class="fa fa-cog"></i>
				</button>
				<!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<div class="dropdown-menu-content">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div> -->
			</div>
			<h4 class="mb-0">
				<span class="count">{{$num_of_relation[$relations[7]]}}</span>
			</h4>
			<p class="text-light">Người tham dự</p>
			<div class="chart-wrapper px-0" style="height:70px;" height="70">
				<h2>{{$relations[7]}}</h2>
			</div>
		</div>

		
	</div>
</div>



<div class="col-xl-12">
	<div class="card">

		<div class="card-footer">
			<ul>
				<li>
					<div class="text-muted">Biên Phòng</div>
					<strong>{{$num_of_relation[$relations[0]]}} Khách ({{round($num_of_relation[$relations[0]]/$total_records*100)}}%)</strong>
					<div class="progress progress-xs mt-2" style="height: 5px;">
						<div class="progress-bar bg-success" role="progressbar" style="width: {{$num_of_relation[$relations[0]]/$total_records*100}}%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</li>
				<li class="hidden-sm-down">
					<div class="text-muted">Họ Hàng</div>
					<strong>{{$num_of_relation[$relations[1]]}} Khách ({{round($num_of_relation[$relations[1]]/$total_records*100)}}%)</strong>
					<div class="progress progress-xs mt-2" style="height: 5px;">
						<div class="progress-bar bg-info" role="progressbar" style="width: {{$num_of_relation[$relations[1]]/$total_records*100}}%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</li>
				<li>
					<div class="text-muted">Hàng Xóm</div>
					<strong>{{$num_of_relation[$relations[2]]}} Khách ({{round($num_of_relation[$relations[2]]/$total_records*100)}}%)</strong>
					<div class="progress progress-xs mt-2" style="height: 5px;">
						<div class="progress-bar bg-warning" role="progressbar" style="width: {{$num_of_relation[$relations[2]]/$total_records*100}}%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</li>
				<li class="hidden-sm-down">
					<div class="text-muted">Doanh Nghiệp</div>
					<strong>{{$num_of_relation[$relations[3]]}} Khách ({{round($num_of_relation[$relations[3]]/$total_records*100)}}%)</strong>
					<div class="progress progress-xs mt-2" style="height: 5px;">
						<div class="progress-bar bg-danger" role="progressbar" style="width: {{$num_of_relation[$relations[3]]/$total_records*100}}%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</li>
				<li class="hidden-sm-down">
					<div class="text-muted">Bạn Bè Bố</div>
					<strong>{{$num_of_relation[$relations[4]]}} Khách ({{round($num_of_relation[$relations[4]]/$total_records*100)}}%)</strong>
					<div class="progress progress-xs mt-2" style="height: 5px;">
						<div class="progress-bar" role="progressbar" style="width: {{$num_of_relation[$relations[4]]/$total_records*100}}%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</li>
				<li class="hidden-sm-down">
					<div class="text-muted">Bạn Bè Mẹ</div>
					<strong>{{$num_of_relation[$relations[5]]}} Khách ({{round($num_of_relation[$relations[5]]/$total_records*100)}}%)</strong>
					<div class="progress progress-xs mt-2" style="height: 5px;">
						<div class="progress-bar" role="progressbar" style="width: {{$num_of_relation[$relations[5]]/$total_records*100}}%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</li>
				<li class="hidden-sm-down">
					<div class="text-muted">Bạn Bè Dũng</div>
					<strong>{{$num_of_relation[$relations[6]]}} Khách ({{round($num_of_relation[$relations[6]]/$total_records*100)}}%)</strong>
					<div class="progress progress-xs mt-2" style="height: 5px;">
						<div class="progress-bar" role="progressbar" style="width: {{$num_of_relation[$relations[6]]/$total_records*100}}%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</li>
				<li class="hidden-sm-down">
					<div class="text-muted">Khách</div>
					<strong>{{$num_of_relation[$relations[7]]}} Khách ({{round($num_of_relation[$relations[7]]/$total_records*100)}}%)</strong>
					<div class="progress progress-xs mt-2" style="height: 5px;">
						<div class="progress-bar" role="progressbar" style="width: {{$num_of_relation[$relations[7]]/$total_records*100}}%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	var tags = <?php echo json_encode($tags); ?>;
	var numOfRelation = <?php echo json_encode($num_of_relation); ?>;
	console.log(numOfRelation);
	
	jQuery(document).ready(function() {

		var items = jQuery('.card');
		jQuery.each(items,function(key,value){
			var location = "http://thongke.com/";
			jQuery(value).on('click',function(){
				window.location.href = location+tags[key];
			});
		});
	});
</script>
@endsection