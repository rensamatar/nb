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
			<h3><strong>ติดต่อ</strong></h3>
			<hr class="green">
			@if($person_one)
			<div class="separate">
				<p><strong>{!! $person_one->nickname !!}</strong></p>
				<p>{!! $person_one->phone !!}</p>
			</div>
			@endif
			@if($person_two)
			<div class="separate">
				<p><strong>{!! $person_two->nickname !!}</strong></p>
				<p>{!! $person_two->phone !!}</p>
			</div>
			@endif
			@if($person_three)
			<div class="separate">
				<p><strong>{!! $person_three->nickname !!}</strong></p>
				<p>{!! $person_three->phone !!}</p>
			</div>
			@endif
			@if($person_four)
			<div class="separate">
				<p><strong>{!! $person_four->nickname !!}</strong></p>
				<p>{!! $person_four->phone !!}</p>
			</div>
			@endif
		</div>
	</div>
</div>

@stop