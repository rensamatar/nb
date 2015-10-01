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
		<div class="col-md-9">
			<p class="small">{!! $activity->body !!}</p>
		</div>
		<div class="col-md-3 sidebar">
			<div class="widget widget-recent-posts">
				<div class="widget-heading"><h4>Recent Posts</h4></div>
				<div class="widget-body">
					@if($recent->count())
					<ul>
						@foreach($recent as $item)
						<li>
							<a href="{!! url('activities/'.$item->id) !!}">
								{!! str_limit($item->title, $limit = 44, $end = '...') !!}
							</a>
							<span>{!! $item->created_at->diffForHumans() !!}</span>
						</li>
						@endforeach
					</ul>
					@else
					<p>No data.</p>
					@endif
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			@if($previousActivity > 0)
			<a href="{!! url('activity/' . $previousActivity ) !!}" class="pull-left btn btn-md btn-black">Previous</a>
			@endif
			@if($nextActivity > $activity->count())
			<a href="{!! url('activity/' . $nextActivity ) !!}" class="pull-right btn btn-md btn-black">Next</a>
			@endif
		</div>
	</div>
</div>

<section id="works" class="works section no-padding">
	<div class="container-fluid no-padding-right">
		<div class="row no-gutter">
			@if($activity->img_file_01)
			<div class="col-lg-3 col-md-6 col-sm-6 work no-padding-top no-padding-bottom">
				<a href="{!! $activity->thumbnail_01() !!}" class="work-box" id="fancybox" rel="{!! $activity->id !!}">
					<img src="{!! $activity->thumbnail_01() !!}" alt="" width="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5></h5>
							<p>{!! $activity->created_at->diffForHumans() !!}</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
			@endif
			@if($activity->img_file_02)
			<div class="col-lg-3 col-md-6 col-sm-6 work no-padding-top no-padding-bottom">
				<a href="{!! $activity->thumbnail_02() !!}" class="work-box" id="fancybox" rel="{!! $activity->id !!}">
					<img src="{!! $activity->thumbnail_02() !!}" alt="" width="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5></h5>
							<p>{!! $activity->created_at->diffForHumans() !!}</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
			@endif
			@if($activity->img_file_03)
			<div class="col-lg-3 col-md-6 col-sm-6 work no-padding-top no-padding-bottom">
				<a href="{!! $activity->thumbnail_03() !!}" class="work-box" id="fancybox" rel="{!! $activity->id !!}">
					<img src="{!! $activity->thumbnail_03() !!}" alt="" width="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5></h5>
							<p>{!! $activity->created_at->diffForHumans() !!}</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
			@endif
			@if($activity->img_file_04)
			<div class="col-lg-3 col-md-6 col-sm-6 work no-padding-top no-padding-bottom">
				<a href="{!! $activity->thumbnail_04() !!}" class="work-box" id="fancybox" rel="{!! $activity->id !!}">
					<img src="{!! $activity->thumbnail_04() !!}" alt="" width="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5></h5>
							<p>{!! $activity->created_at->diffForHumans() !!}</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
			@endif
			@if($activity->img_file_05)
			<div class="col-lg-3 col-md-6 col-sm-6 work no-padding-top no-padding-bottom">
				<a href="{!! $activity->thumbnail_05() !!}" class="work-box" id="fancybox" rel="{!! $activity->id !!}">
					<img src="{!! $activity->thumbnail_05() !!}" alt="" width="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5></h5>
							<p>{!! $activity->created_at->diffForHumans() !!}</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
			@endif
			@if($activity->img_file_06)
			<div class="col-lg-3 col-md-6 col-sm-6 work no-padding-top no-padding-bottom">
				<a href="{!! $activity->thumbnail_06() !!}" class="work-box" id="fancybox" rel="{!! $activity->id !!}">
					<img src="{!! $activity->thumbnail_06() !!}" alt="" width="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5></h5>
							<p>{!! $activity->created_at->diffForHumans() !!}</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
			@endif
			@if($activity->img_file_07)
			<div class="col-lg-3 col-md-6 col-sm-6 work no-padding-top no-padding-bottom">
				<a href="{!! $activity->thumbnail_07() !!}" class="work-box" id="fancybox" rel="{!! $activity->id !!}">
					<img src="{!! $activity->thumbnail_07() !!}" alt="" width="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5></h5>
							<p>{!! $activity->created_at->diffForHumans() !!}</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
			@endif
			@if($activity->img_file_08)
			<div class="col-lg-3 col-md-6 col-sm-6 work no-padding-top no-padding-bottom">
				<a href="{!! $activity->thumbnail_08() !!}" class="work-box" id="fancybox" rel="{!! $activity->id !!}">
					<img src="{!! $activity->thumbnail_08() !!}" alt="" width="">
					<div class="overlay">
						<div class="overlay-caption">
							<h5></h5>
							<p>{!! $activity->created_at->diffForHumans() !!}</p>
						</div>
					</div><!-- overlay -->
				</a>
			</div>
			@endif
		</div>
	</div>
</section><!-- works -->

@stop