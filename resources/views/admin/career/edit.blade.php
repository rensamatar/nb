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
		<div class="col-md-6">
			<div class="box">
				{!! Form::open(array('url' => 'admin/career/' .$career->id. '/edit', 'files' => true)) !!}

				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group {!! $errors->first('title', 'has-error') !!}">
								{!! Form::label('title', 'Title : ') !!}
								{!! Form::text('title', Input::old('title', $career->title), array('class' => 'form-control')) !!}
								{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="form-group {!! $errors->first('attribute', 'has-error') !!}">
								{!! Form::label('attribute', 'Detail : ') !!}
								{!! Form::text('attribute', Input::old('attribute', $career->attribute), array('class' => 'form-control')) !!}
								{!! $errors->first('attribute', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group {!! $errors->first('gender', 'has-error') !!}">
										{!! Form::label('gender', 'Gender : ') !!}
										{!! Form::text('gender', Input::old('gender', $career->gender), array('class' => 'form-control')) !!}
										{!! $errors->first('gender', '<span class="help-block">:message</span>') !!}
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group {!! $errors->first('age', 'has-error') !!}">
										{!! Form::label('age', 'Age : ') !!}
										{!! Form::text('age', Input::old('age', $career->age), array('class' => 'form-control')) !!}
										{!! $errors->first('age', '<span class="help-block">:message</span>') !!}
									</div>
								</div>
							</div>
							<div class="form-group {!! $errors->first('qualifications', 'has-error') !!}">
								{!! Form::label('qualifications', 'Qualifications : ') !!}
								{!! Form::text('qualifications', Input::old('qualifications', $career->qualifications), array('class' => 'form-control')) !!}
								{!! $errors->first('qualifications', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group {!! $errors->first('published_date', 'has-error') !!}">
										{!! Form::label('published_date', 'Published On : ') !!}
										{!! Form::input('date', 'published_date', $career->getPublishedDate(), array('class' => 'form-control')) !!}
										{!! $errors->first('published_date', '<span class="help-block">:message</span>') !!}
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group {!! $errors->first('banner', 'has-error') !!}">
										{!! Form::label('banner', 'Image : ') !!}
										{!! Form::file('banner', Input::old('banner')) !!}
										@if($career->banner)
										<p class="help-block">
											<img src="{!! $career->thumbnail() !!}" width="210px">
										</p>
										@else
										<p class="help-block">
											<img src="{!! asset('img/no-image.png') !!}" width="210px">
										</p>
										@endif
										{!! $errors->first('banner', '<span class="help-block">:message</span>') !!}
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						{!! Form::submit('Edit career', array('class' => 'btn btn-primary')) !!}
					</div>
				</section>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>

@stop