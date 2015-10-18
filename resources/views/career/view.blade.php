@extends('layouts.default')
@section('content')

<div id="blog" name="blog" data-parallax="scroll" data-image-src="{!! asset('img/bg-subheader.jpg') !!}">
	<div class="container">
		<div class="row centered wow fadeInUp delay-1s">
			<h2>{!! $career->title !!}</h2>
			<div class="col-sm-10 col-sm-offset-1 centered wow fadeInUp delay-15s">
				<p class="created-date">{!! $career->updated_at !!}</p>
			</div>
		</div>
	</div>
</div>

<div id="blog-body" class="container">
	<div class="row bottom">
		<div class="col-md-4">
			<h3><strong>รายละเอียด</strong></h3>
			<hr class="green">
			<p><strong></i>ที่ทำงาน</strong></p>
			<p>{!! $career->title !!}</p>
			<p><strong></i>ผลิต</strong></p>
			<p>{!! $career->attribute !!}</p>
			<p><strong>เพศ</strong></p>
			<p>{!! $career->gender !!}</p>
			<p><strong>อายุ</strong></p>
			<p>{!! $career->age !!}</p>
			<p><strong>วุฒิการศึกษา</strong></p>
			<p>{!! $career->qualifications !!}</p>
		</div>
		<div class="col-md-5">
			<h3><strong>ค่าจ้าง / สวัสดิการ</strong></h3>
			<hr class="green">
			@foreach($wages as $wage)
			<p>{!! $wage->title !!}</p>
			@endforeach
		</div>
		<div class="col-md-3">
			<h3><strong>ติดต่อ</strong></h3>
			<hr class="green">
			@foreach($staffs as $person)
			<div class="separate">
				<p><strong>{!! $person->staff->nickname !!}</strong></p>
				<p>{!! $person->staff->phone !!}</p>
			</div>
			@endforeach
		</div>
	</div>
</div>

@stop