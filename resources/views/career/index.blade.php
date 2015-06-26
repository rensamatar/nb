@extends('layouts.default')
@section('content')
<section class="activity-hero">
	<div class="container">
		<div class="row white-font-color text-center  wow fadeInUp animated">
			<h2>Our Career</h2>
			<div class="col-sm-10 col-sm-offset-1 white-font-color  text-center wow fadeInUp animated">
				<p class="created-date">ตำแหน่งงานที่เปิดรับสมัคร</p>
			</div>
		</div>
	</div>
</section>

<div class="container normal">
	@foreach($careers as $career)
	<div class="row">
		<div class="col-sm-6">
			<a href="{!! url('careers/'.$career->id) !!}">
				<img src="{!! asset('img/img-07.jpg') !!}" alt="" class="img-responsive">
			</a>
		</div>
		<div class="col-sm-6">
			<h2>
				<a href="{!! url('careers/'.$career->id) !!}">
				{!! str_limit($career->title, $limit = 100, $end = '...') !!}
				</a>
			</h2>
			<p class="small">{!! str_limit($career->body, $limit = 200, $end = '...') !!}</p>
		</div>
	</div>
	@endforeach
</div>

@include('layouts.address')
@include('layouts.footer')

@stop