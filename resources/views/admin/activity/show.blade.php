@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Activity<small>details</small></h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">View</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-8">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">{!! $activity->title !!}</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
					<p><img src="{!! $activity->thumbnail() !!}" /></p>
					<br />
					{!! $activity->body !!}
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Photos</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<img class="col-sm-6" src="{!! $activity->thumbnail_01() !!}" style="padding-bottom: 10px"> 
						<img class="col-sm-6" src="{!! $activity->thumbnail_02() !!}" style="padding-bottom: 10px"> 
						<img class="col-sm-6" src="{!! $activity->thumbnail_03() !!}" style="padding-bottom: 10px"> 
						<img class="col-sm-6" src="{!! $activity->thumbnail_04() !!}" style="padding-bottom: 10px"> 
						<img class="col-sm-6" src="{!! $activity->thumbnail_05() !!}" style="padding-bottom: 10px"> 
						<img class="col-sm-6" src="{!! $activity->thumbnail_06() !!}" style="padding-bottom: 10px"> 
						<img class="col-sm-6" src="{!! $activity->thumbnail_07() !!}" style="padding-bottom: 10px"> 
						<img class="col-sm-6" src="{!! $activity->thumbnail_08() !!}" style="padding-bottom: 10px"> 
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@stop