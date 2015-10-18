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
		<div class="col-md-6">
			<div class="box">
				{!! Form::open(array('url' => 'admin/staff/create', 'files' => true)) !!}

				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group {!! $errors->first('name', 'has-error') !!}">
								{!! Form::label('name', 'Name : ') !!}
								{!! Form::text('name', null, array('class' => 'form-control')) !!}
								{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="form-group {!! $errors->first('nickname', 'has-error') !!}">
								{!! Form::label('nickname', 'Nickname : ') !!}
								{!! Form::text('nickname', null, array('class' => 'form-control')) !!}
								{!! $errors->first('nickname', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="form-group {!! $errors->first('position', 'has-error') !!}">
								{!! Form::label('position', 'Position : ') !!}
								{!! Form::text('position', null, array('class' => 'form-control')) !!}
								{!! $errors->first('position', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group {!! $errors->first('phone', 'has-error') !!}">
										{!! Form::label('phone', 'Phone : ') !!}
										{!! Form::text('phone', null, array('class' => 'form-control')) !!}
										{!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group {!! $errors->first('image', 'has-error') !!}">
										{!! Form::label('image', 'Image : ') !!}
										{!! Form::file('image') !!}
										<p class="help-block">
											<img src="{!! asset('img/no-image.png') !!}" width="120px"/>
										</p>
										{!! $errors->first('image', '<span class="help-block">:message</span>') !!}
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						{!! Form::submit('Add New Staff', array('class' => 'btn btn-primary')) !!}
					</div>
				</section>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>

@stop