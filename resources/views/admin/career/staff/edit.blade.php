@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Edit Staff<small>Edit staff</small></h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Create</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box">
				{!! Form::open(array('url' => 'admin/sub/' .$careerStaff->id. '/edit')) !!}

				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group {!! $errors->first('staff', 'has-error') !!}">
								{!! Form::label('staff', 'Staff Name') !!}
								{!! Form::staff('staff', $careerStaff->staff->id, 'form-control') !!}
								{!! $errors->first('staff', '<span class="help-block">:message</span>') !!}
							</div>

							<div class="form-group">
								{!! Form::submit('Edit staff', array('class' => 'btn btn-primary')) !!}
							</div>
						</div>
					</div>
				</section>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>

@stop