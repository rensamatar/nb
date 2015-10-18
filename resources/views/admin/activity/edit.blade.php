@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Edit Activity<small>Edit activity</small></h1>
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
				{!! Form::open(array('url' => 'admin/activity/' .$activity->id. '/edit' , 'files' => true)) !!}

				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group {!! $errors->first('title', 'has-error') !!}">
								{!! Form::label('title', 'Title : ') !!}
								{!! Form::text('title', Input::old('title', $activity->title), array('class' => 'form-control')) !!}
								{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="form-group {!! $errors->first('body', 'has-error') !!}">
								{!! Form::label('body', 'Body : ') !!}
								{!! Form::textarea('body', Input::old('body', $activity->body), array('class' => 'form-control', 'id' => 'content-editor', 'size' => '30x4')) !!}
								{!! $errors->first('body', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group {!! $errors->first('published_date', 'has-error') !!}">
										{!! Form::label('published_date', 'Published On : ') !!}
										{!! Form::input('date', 'published_date', $activity->getPublishedDate(), array('class' => 'form-control')) !!}
										{!! $errors->first('published_date', '<span class="help-block">:message</span>') !!}
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group {!! $errors->first('banner', 'has-error') !!}">
										{!! Form::label('banner', 'Banner : ') !!}
										{!! Form::file('banner') !!}
										@if($activity->banner)
										<p class="help-block">
											<img src="{!! $activity->thumbnail() !!}" width="210px">
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
						{!! Form::submit('Edit activity', array('class' => 'btn btn-primary')) !!}
					</div>
				</section>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>

@stop