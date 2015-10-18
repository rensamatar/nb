@extends('layouts.default')
@section('content')

<div id="blog" name="blog" data-parallax="scroll" data-image-src="{!! asset('img/bg-subheader.jpg') !!}">
	<div class="container">
		<div class="row centered wow fadeInUp delay-1s">
			<h2>{!! $activity->title !!}</h2>
			<div class="col-sm-10 col-sm-offset-1 centered wow fadeInUp delay-15s">
				<p class="created-date">{!! $activity->getPublishedDate() !!}</p>
			</div>
		</div>
	</div>
</div>

<div id="blog-body" class="container">
	<div class="row">
		<div class="col-md-9">
			<h3>{!! $activity->body !!}</h3>
			<hr>
			<div class="row">
				@foreach($photos as $photo)
				<a href="{!! $photo->originalImage() !!}" id="fancybox" rel="{!! $activity->id !!}">
					<img class="col-sm-4 col-xs-4 no-padding-right" src="{!! $photo->thumbnail() !!}" style="padding-bottom: 10px" alt="{!! $photo->description !!}">
				</a>
				@endforeach
			</div>

		</div>
		<div class="col-md-3 sidebar">
			<div class="widget widget-recent-posts">
			<div class="widget-heading"><h4>Mosted View</h4></div>
				<div class="widget-body">
					@if($recent->count())
					<ul>
						@foreach($recent as $item)
						<li>
							<a href="{!! url('activities/'.$item->id) !!}">
								{!! str_limit($item->title, $limit = 44, $end = '...') !!}
							</a>
							<span>{!! $item->created_at !!}</span>
						</li>
						@endforeach
					</ul>
					@else
					<p>No data available.</p>
					@endif
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<a href="{!! url('activities/' . $previousActivity ) !!}" class="pull-left btn btn-md btn-black {!! ($activity->id == 1 ? 'disabled' : '') !!}">Previous</a>
			<a href="{!! url('activities/' . $nextActivity ) !!}" class="pull-right btn btn-md btn-black {!! ($activity->id == $previousActivity ? 'disabled' : '') !!}">Next</a>
		</div>
	</div>
</div>

@stop