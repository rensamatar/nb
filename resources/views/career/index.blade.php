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
			<div class="overlay-effect effects clearfix">
				<div class="img">
					<img src="{!! $career->thumbnail() !!}" alt="Career Item" draggable="false">
					<div class="overlay">
						<a href="{!! url('careers/'.$career->id) !!}" class="expand">
							<i class="icon icon-search"></i><br />
							View More
						</a>
						<a class="close-overlay hidden">x</a>
					</div>
				</div>
				<h3><a href="{!! url('careers/'.$career->id) !!}">{!! str_limit($career->title, $limit = 42, $end = '...') !!}</a></h3>
				<p>{!! str_limit($career->attribute, $limit = 250, $end = '...') !!}</p>
			</div>
		</div>
		@endforeach
	</div>
</div>

@stop