@extends('layouts.default')
@section('content')

<div id="blog" name="blog" data-parallax="scroll" data-image-src="{!! asset('img/bg-subheader.jpg') !!}">
	<div class="container">
		<div class="row centered wow fadeInUp delay-1s">
			<h2>{!! $activity->title !!}</h2>
			<div class="col-sm-10 col-sm-offset-1 centered wow fadeInUp delay-15s">
				<p class="created-date">{!! $activity->created_at->diffForHumans() !!}</p>
			</div>
		</div>
	</div>
</div>

<div id="blog-body" class="container">
	<div class="row">
		<div class="col-sm-12">
			<p class="small">{!! $activity->body !!}</p>
		</div>
	</div>
</div>

<section id="works" class="works section no-padding">
	<div class="container-fluid no-padding-right">
		<div class="row no-gutter">
			<div class="col-lg-3 col-md-6 col-sm-6 work no-padding-top no-padding-bottom">
				<a href="{!! asset('img/work-3.jpg') !!}" class="work-box">
					<img src="{!! asset('img/work-3.jpg') !!}" alt="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5>Project Name</h5>
							<p>Website Design</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 work">
				<a href="{!! asset('img/work-3.jpg') !!}" class="work-box">
					<img src="{!! asset('img/work-3.jpg') !!}" alt="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5>Project Name</h5>
							<p>Website Design</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 work">
				<a href="{!! asset('img/work-3.jpg') !!}" class="work-box">
					<img src="{!! asset('img/work-3.jpg') !!}" alt="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5>Project Name</h5>
							<p>Website Design</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 work">
				<a href="{!! asset('img/work-3.jpg') !!}" class="work-box">
					<img src="{!! asset('img/work-3.jpg') !!}" alt="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5>Project Name</h5>
							<p>Website Design</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 work">
				<a href="{!! asset('img/work-3.jpg') !!}" class="work-box">
					<img src="{!! asset('img/work-3.jpg') !!}" alt="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5>Project Name</h5>
							<p>Website Design</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 work">
				<a href="{!! asset('img/work-3.jpg') !!}" class="work-box">
					<img src="{!! asset('img/work-3.jpg') !!}" alt="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5>Project Name</h5>
							<p>Website Design</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 work">
				<a href="{!! asset('img/work-3.jpg') !!}" class="work-box">
					<img src="{!! asset('img/work-3.jpg') !!}" alt="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5>Project Name</h5>
							<p>Website Design</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 work">
				<a href="{!! asset('img/work-3.jpg') !!}" class="work-box">
					<img src="{!! asset('img/work-3.jpg') !!}" alt="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5>Project Name</h5>
							<p>Website Design</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
		</div>
	</div>
</section><!-- works -->

@stop