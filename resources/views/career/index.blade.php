@extends('layouts.default')
@section('content')
<section class="activity-hero">
	<div class="container">
		<div class="row white-font-color text-center  wow fadeInUp animated">
			<h2>Our Career</h2>
			<div class="col-sm-10 col-sm-offset-1 white-font-color  text-center wow fadeInUp animated">
				<p class="created-date">ตำแหน่งงานที่เปิดรับสมัคร</p>
			</div>
		</div>
	</div>
</section>

<div class="container content-body">
	<div class="row">
		@foreach($careers as $career)
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="card card-blog card-plain">
				<div class="image" style="background-image: url('{!! $career->thumbnail() !!}'); background-size: cover; background-position: 50% 50%;">
					<a href="{!! url('careers/'.$career->id) !!}">
						<div class="filter filter-white">
							<button class="btn btn-neutral btn-simple">
								<i class="fa fa-align-left"></i> Read More
							</button>
						</div>
					</a>
				</div>
				<div class="content">
					<p class="category">
					<i class="fa fa-clock-o"></i> {!! $career->created_at->diffForHumans() !!}
					<span class="pull-right">{!! $career->author !!}</span>
					</p>
					<a class="card-link" href="{!! url('activities/'.$career->id) !!}">
						<h4 class="title">{!! str_limit($career->title, $limit = 100, $end = '...') !!}</h4>
						<p>{!! str_limit($career->body, $limit = 200, $end = '...') !!}</p>
					</a>
					<div class="footer">
						<div class="stats pull-right">
							
						</div>
					</div>
				</div>
			</div> <!-- end card -->
		</div>
		@endforeach
	</div>
</div>

@include('layouts.address')
@include('layouts.footer')

@stop