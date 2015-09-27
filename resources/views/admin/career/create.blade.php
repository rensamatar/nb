@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>New Career<small>Create new career</small></h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Create</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				{!! Form::open(array('url' => 'admin/career')) !!}

				@include('admin.career.form', array('buttonText' => 'Add career'))

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>

@stop