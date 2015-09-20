@extends('layouts.default')
@section('content')

<div id="blog" name="blog">
	<div class="container">
		<div class="row white-font-color centered wow fadeInUp animated">
			<h2>{!! $career->title !!}</h2>
			<div class="col-sm-10 col-sm-offset-1 white-font-color centered wow fadeInUp animated">
				<p class="created-date">{!! $career->updated_at->diffForHumans() !!}</p>
			</div>
		</div>
	</div>
</div>

<div id="blog-body" class="container">
	<div class="row bottom">
		<div class="col-md-4">
			<h3><strong><i class="fa fa-database"></i> รายละเอียด</strong></h3>
			<p><strong><i class="fa fa-gear"></i>ที่ทำงาน</strong></p>
			<p>{!! $career->title !!}</p>
			<p><strong><i class="fa fa-gavel"></i>ผลิต</strong></p>
			<p>{!! $career->attribute !!}</p>
			<p><strong><i class="fa fa-venus-mars"></i>เพศ</strong></p>
			<p>{!! $career->gender !!}</p>
			<p><strong><i class="fa fa-life-bouy"></i>อายุ</strong></p>
			<p>{!! $career->age !!}</p>
			<p><strong><i class="fa fa-mortar-board"></i>วุฒิการศึกษา</strong></p>
			<p>{!! $career->qualifications !!}</p>
		</div>
		<div class="col-md-5">
			<h3><strong><i class="fa fa-bullhorn"></i> ค่าจ้าง / สวัสดิการ</strong></h3>
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
		<div class="col-md-3">
			<h3><strong><i class="fa fa-phone"></i> ติดต่อ</strong></h3>
			<div class="">
				<p><strong>พี่ยุพิน</strong></p>
				<p>086-3932296</p>
			</div>
			<div class="">
				<p><strong>พี่โอม</strong></p>
				<p>086-3080943</p>
			</div>
			<div class="">
				<p><strong>พี่เติ้ล</strong></p>
				<p>086-3080941</p>
			</div>
			<div class="">
				<p><strong>พี่เติ้ล</strong></p>
				<p>086-3080941</p>
			</div>
		</div>
	</div>
</div>

@stop