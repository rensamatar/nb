@extends('layouts.default')
@section('content')

<div id="blog" name="blog">
	<div class="container">
		<div class="row white-font-color centered wow fadeInUp animated">
			<h2>{!! $activity->title !!}</h2>
			<div class="col-sm-10 col-sm-offset-1 white-font-color centered wow fadeInUp animated">
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

@stop