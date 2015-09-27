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
					<h3 class="box-title">Number : {{ $staff->id }}</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
					<p><img src="{!! $staff->thumbnail() !!}" /></p>
					<h3 class="box-title">{{ $staff->name }}</h3>
					<p>{{ $staff->position }}</p>
					<p>{{ $staff->phone }}</p>
				</div>
			</div>
		</div>
	</div>
</section>

@stop