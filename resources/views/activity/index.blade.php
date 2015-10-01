@extends('layouts.default')
@section('content')

<div id="blog" name="blog" data-parallax="scroll" data-image-src="{!! asset('img/bg-subheader.jpg') !!}">
	<div class="container">
		<div class="row centered wow fadeInUp delay-1s">
			<h2>Our Activity</h2>
			<div class="col-sm-10 col-sm-offset-1 centered wow fadeInUp delay-15s">
				<p class="created-date">กิจกรรมของนาบุญอัพเกรด</p>
			</div>
		</div>
	</div>
</div>

<div id="blog-body" class="container">
	<div class="row">
		@foreach($activities as $activity)
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<div class="overlay-effect effects clearfix">
				<div class="img">
					<img src="{!! $activity->thumbnail() !!}" alt="Activity Item" draggable="false">
					<div class="overlay">
						<a href="{!! url('activities/'.$activity->id) !!}" class="expand">
							<i class="icon icon-search"></i><br />
							View More
						</a>
						<a class="close-overlay hidden">x</a>
					</div>
				</div>
				<h3><a href="{!! url('activities/'.$activity->id) !!}">{!! str_limit($activity->title, $limit = 44, $end = '...') !!}</a></h3>
				<p>{!! str_limit(strip_tags($activity->body), $limit = 250, $end = '...') !!}</p>
			</div>
		</div>
		@endforeach
	</div>
</div>

@stop