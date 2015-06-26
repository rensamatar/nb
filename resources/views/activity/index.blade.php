@extends('layouts.default')
@section('content')
<section class="activity-hero">
	<div class="container">
		<div class="row white-font-color text-center  wow fadeInUp animated">
			<h2>Our Activity</h2>
			<div class="col-sm-10 col-sm-offset-1 white-font-color  text-center wow fadeInUp animated">
				<p class="created-date">กิจกรรมของนาบุญอัพเกรด</p>
			</div>
		</div>
	</div>
</section>

<div class="container normal">
	@foreach($activities as $activity)
	<div class="row">
		<div class="col-sm-6">
			<a href="{!! url('activities/'.$activity->id) !!}">
				<img src="{!! asset('img/img-07.jpg') !!}" alt="" class="img-responsive">
			</a>
		</div>
		<div class="col-sm-6">
			<h2>
				<a href="{!! url('activities/'.$activity->id) !!}">
				{!! str_limit($activity->title, $limit = 100, $end = '...') !!}
				</a>
			</h2>
			<p class="small">{!! str_limit($activity->body, $limit = 200, $end = '...') !!}</p>
		</div>
	</div>
	@endforeach
</div>

@include('layouts.address')
@include('layouts.footer')

@stop