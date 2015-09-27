@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Career<small>details</small></h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">View</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">{!! $career->title !!}</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<h4><strong><i class="fa fa-database"></i> รายละเอียด</strong></h4>
							<p><strong><i class="fa fa-gear"></i> ที่ทำงาน</strong></p>
							<p>{!! $career->title !!}</p>
							<p><strong><i class="fa fa-gavel"></i> ผลิต</strong></p>
							<p>{!! $career->attribute !!}</p>
							<p><strong><i class="fa fa-venus-mars"></i> เพศ</strong></p>
							<p>{!! $career->gender !!}</p>
							<p><strong><i class="fa fa-life-bouy"></i> อายุ</strong></p>
							<p>{!! $career->age !!}</p>
							<p><strong><i class="fa fa-mortar-board"></i> วุฒิการศึกษา</strong></p>
							<p>{!! $career->qualifications !!}</p>
						</div>
						<div class="col-md-6">
							<h4><strong><i class="fa fa-bullhorn"></i> ค่าจ้าง / สวัสดิการ</strong></h4>
							<p>{!! $career->wage_1 !!}</p>
							<p>{!! $career->wage_2 !!}</p>
							<p>{!! $career->wage_3 !!}</p>
							<p>{!! $career->wage_4 !!}</p>
							<p>{!! $career->wage_5 !!}</p>
							<p>{!! $career->wage_6 !!}</p>
							<p>{!! $career->wage_7 !!}</p>
							<p>{!! $career->wage_8 !!}</p>
							<p>{!! $career->wage_9 !!}</p>
							<p>{!! $career->wage_10 !!}</p>
							<p>{!! $career->wage_11 !!}</p>
							<p>{!! $career->wage_12 !!}</p>
							<p>{!! $career->wage_13 !!}</p>
							<p>{!! $career->wage_14 !!}</p>
							<p>{!! $career->wage_15 !!}</p>
							<p>{!! $career->wage_16 !!}</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@stop