@extends('layouts.default')
@section('content')

<section class="activity-hero" style="background-image: url('{!! $career->thumbnail() !!}'); background-size: cover; background-position: 50% 50%;">
	<div class="container">
		<div class="row white-font-color text-center  wow fadeInUp animated">
			<h2>{!! $career->title !!}</h2>
			<div class="col-sm-10 col-sm-offset-1 white-font-color  text-center wow fadeInUp animated">
				<p class="created-date">{!! $career->created_at->diffForHumans() !!}</p>
			</div>
		</div>
	</div>
</section>

<div class="container normal">
	<div class="row">
		<div class="col-sm-12">
			<p class="small">{{ $career->body }}</p>
		</div>
	</div>
</div>

@include('layouts.address')
@include('layouts.footer')

@stop