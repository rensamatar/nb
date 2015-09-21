@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Edit Staff<small>edit staff</small></h1>
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
					{!! Form::model($members, array('method' => 'PATCH', 'action' => ['Admin\NabunStaffController@update', $members->id ], 'files' => true)) !!}

					@include('admin.staff.form', array('buttonText' => 'Edit staff'))

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</section>
</div>

@stop