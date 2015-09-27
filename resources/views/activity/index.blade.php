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
			<div class="card">
				<a href="{!! url('activities/'.$activity->id) !!}">
					<img src="{!! $activity->thumbnail() !!}" width="100%" alt="">
					<h3>{!! str_limit($activity->title, $limit = 44, $end = '...') !!}</h3>
					{!! $activity->created_at->diffForHumans() !!}
				</a>
				<p>{!! str_limit(strip_tags($activity->body), $limit = 250, $end = '...') !!}</p>
			</div>
		</div>
		@endforeach
	</div>
</div>

@stop