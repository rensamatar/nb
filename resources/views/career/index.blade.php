@extends('layouts.default')
@section('content')

<div id="blog" name="blog" data-parallax="scroll" data-image-src="{!! asset('img/bg-subheader.jpg') !!}">
	<div class="container">
		<div class="row centered wow fadeInUp delay-1s">
			<h2>Our Career</h2>
			<div class="col-sm-10 col-sm-offset-1 centered wow fadeInUp delay-15s">
				<p class="created-date">ตำแหน่งงานที่ประกาศรับสมัคร</p>
			</div>
		</div>
	</div>
</div>

<div id="blog-body" class="container">
	<div class="row">
		@foreach($careers as $career)
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<div class="card">
				<a href="{!! url('careers/'.$career->id) !!}">
					<img src="{!! $career->thumbnail() !!}" width="100%" alt="">
					<h3>{!! str_limit($career->title, $limit = 44, $end = '...') !!}</h3>
				</a>
				<p>{!! str_limit($career->attribute, $limit = 250, $end = '...') !!}</p>
			</div>
		</div>
		@endforeach
	</div>
</div>

@stop