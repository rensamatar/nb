@extends('layouts.default')
@section('content')

<section class="activity-hero">
	<div class="container">
		<div class="row white-font-color text-center  wow fadeInUp animated">
			<h2>{!! $activity->title !!}</h2>
			<div class="col-sm-10 col-sm-offset-1 white-font-color  text-center wow fadeInUp animated">
				<p class="created-date">{!! $activity->created_at->diffForHumans() !!}</p>
			</div>
		</div>
	</div>
</section>

<div class="container normal">
	<div class="row">
		<div class="col-sm-12">
			<p class="small">{{ $activity->body }}</p>
		</div>
	</div>
</div>

<section id="pagination" class="container text-center">
	<ul class="pagination">
		<li><a href="#" class="main-color">Previous Post</a></li>
		<li><a href="#" class="main-color">Next Post</a></li>
	</ul>
</section>

@include('layouts.address')
@include('layouts.footer')

@stop