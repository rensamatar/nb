@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Edit Activity<small>edit activity</small></h1>
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
					{!! Form::model($activity, array('method' => 'PATCH', 'action' => ['Admin\ActivityController@update', $activity->id ], 'files' => true)) !!}

					@include('admin.activity.form', array('buttonText' => 'Edit activity'))

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</section>
</div>

@stop