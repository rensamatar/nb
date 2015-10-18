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
		<div class="col-md-4">
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Published on {!! $activity->getPublishedDate() !!}</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
					<p><img src="{!! $activity->thumbnail() !!}" width="100%" /></p>
					<h4>{!! $activity->title !!}</h4>
					<p>{!! $activity->body !!}</p>
				</div>
				<div class="box-footer text-right">
					<a class="btn btn-info" href="{!! url('admin/activity/' . $activity->id . '/edit') !!}">Edit</a>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Photos of {!! $activity->title !!}</h3>
					<a class="pull-right" href="{!! url('admin/photo/' . $activity->id . '/create') !!}" title="Add new photo">
					<i class="fa fa-plus"></i>
					</a>
				</div>
				<div class="box-body">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>Photo</th>
								<th>Description</th>
								<th style="width: 80px;">Actions</th>
							</tr>
							@foreach ($photos as $item)
							<tr>
								<td>
									<img class="img-responsive" src="{!! asset('uploads/activity/'.$item['photo']) !!}" width="120px"/>
								</td>
								<td>{!! $item['description'] !!}</td>
								<td class="text-center">
									<a href="{!! url('admin/photo/' . $item['id'] . '/edit') !!}" class="btn btn-xs btn-info">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="{!! url('admin/photo/' . $item['id'] . '/delete') !!}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure ?')">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="box-footer text-right">
					<a class="btn btn-info" href="{!! url('admin/photo/' . $activity->id . '/create') !!}">Add Photo</a>
				</div>
			</div>
		</div>
	</div>
</section>

@stop