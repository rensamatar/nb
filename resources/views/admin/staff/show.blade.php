@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Staff<small>details</small></h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">View</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">
					<a href="{!! url('admin/staff/'.$staff->id .'/edit') !!}">
							<i class="fa fa-pencil"></i>
						</a>
					</h3>
					<div class="box-tools pull-right">
						<a href="{!! url('admin/staff/'.$previous .'/view') !!}" class="btn btn-box-tool {!! ($staff->id == 1 ? 'disabled' : '') !!}" data-toggle="tooltip" title="" data-original-title="Previous">
							<i class="fa fa-chevron-left"></i>
						</a>
						<a href="{!! url('admin/staff/'.$next .'/view') !!}" class="btn btn-box-tool {!! ($staff->id == $maxId ? 'disabled' : '') !!}" data-toggle="tooltip" title="" data-original-title="Next">
							<i class="fa fa-chevron-right"></i>
						</a>
					</div>
				</div><!-- /.box-header -->
				<div class="box-body text-center">
					<img class="img-circle" src="{!! $staff->thumbnail() !!}" width="120px" />
					<h3 class="box-title">{!! $staff->name !!}</h3>
					<p>{!! $staff->position !!}</p>
					<p>{!! $staff->phone !!}</p>
				</div>
			</div>
		</div>
	</div>
</section>

@stop