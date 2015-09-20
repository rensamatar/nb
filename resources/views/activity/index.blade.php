@extends('layouts.default')
@section('content')

<div id="blog" name="blog">
	<div class="container">
		<div class="row white-font-color text-center  wow fadeInUp animated">
			<h2>Our Activity</h2>
			<div class="col-sm-10 col-sm-offset-1 white-font-color  text-center wow fadeInUp animated">
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
					<h3>{!! str_limit($activity->title, $limit = 100, $end = '...') !!}</h3>
				</a>
				<i class="fa fa-clock-o"></i> {!! $activity->created_at->diffForHumans() !!}
				<p>{!! str_limit($activity->body, $limit = 200, $end = '...') !!}</p>
			</div>
		</div>
		@endforeach
	</div>
</div>

@stop