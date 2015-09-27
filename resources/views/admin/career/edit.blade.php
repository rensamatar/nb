@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Edit Career<small>Edit the career</small></h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Edit</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				{!! Form::model($career, ['method' => 'PATCH', 'action' => ['Admin\NabunCareersController@update', $career->id ]]) !!}

				@include('admin.career.form', array('buttonText' => 'Edit career'))

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>

@stop