@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Add an Image to <small>{!! $album->name !!}</small></h1>
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
        {!! Form::open(array('url' => 'admin/addimage', 'files' => true)) !!}
        <input type="hidden" name="album_id" value="{!! $album->id !!}" />

        <section class="content">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group {!! $errors->first('description', 'has-error') !!}">
              {!! Form::label('description', 'Image Description : ') !!}
                {!! Form::text('description', null, array('class' => 'form-control')) !!}
                {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group {!! $errors->first('image', 'has-error') !!}">
                {!! Form::label('image', 'Banner : ') !!}
                {!! Form::file('image') !!}
                <p class="help-block">Select an Image</p>
                {!! $errors->first('image', '<span class="help-block">:message</span>') !!}
              </div>
            </div>
          </div>
          <div class="form-group">
            {!! Form::submit('Add Image', array('class' => 'btn btn-primary')) !!}
          </div>
        </section>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</section>

@stop
