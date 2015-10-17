@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>New Wage<small>Create new wage</small></h1>
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
				{!! Form::open(array('url' => 'admin/wage/' .$career->id. '/create')) !!}

				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group {!! $errors->first('title', 'has-error') !!}">
								{!! Form::label('title', 'Title : ') !!}
								{!! Form::text('title', null, array('class' => 'form-control')) !!}
								{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
							</div>

							<div class="form-group">
								{!! Form::submit('Add new wage', array('class' => 'btn btn-primary')) !!}
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