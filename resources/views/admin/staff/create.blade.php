@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>New Staff<small>create new staff</small></h1>
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
				{!! Form::open(array('url' => 'admin/staff', 'files' => true)) !!}

				@include('admin.staff.form', array('buttonText' => 'Add staff'))

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>

@stop