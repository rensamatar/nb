@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Edit Photo<small>Edit photo</small></h1>
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
				{!! Form::open(array('url' => 'admin/photo/' .$photo->id. '/edit', 'files' => true)) !!}

				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group {!! $errors->first('description', 'has-error') !!}">
								{!! Form::label('description', 'Description : ') !!}
								{!! Form::text('description', Input::old('description', $photo->description), array('class' => 'form-control')) !!}
								{!! $errors->first('description', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="form-group {!! $errors->first('photo', 'has-error') !!}">
								{!! Form::label('photo', 'Photo : ') !!}
								{!! Form::file('photo') !!}
								@if($photo->photo)
								<p class="help-block">
									<img src="{!! asset('uploads/activity/'. $photo->photo) !!}" width="100%">
								</p>
								@else
								<p class="help-block">
									<img src="{!! asset('img/no-image.png') !!}" width="100%">
								</p>
								@endif
								{!! $errors->first('photo', '<span class="help-block">:message</span>') !!}
							</div>

							<div class="form-group">
								{!! Form::submit('Edit photo', array('class' => 'btn btn-primary')) !!}
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