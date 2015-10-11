@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>New Album<small>create new album</small></h1>
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
        {!! Form::open(array('url' => 'admin/albums/edit/'.$album->id, 'files' => true)) !!}

        <section class="content">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group {!! $errors->first('name', 'has-error') !!}">
                {!! Form::label('name', 'Album Name : ') !!}
                {!! Form::text('name', $album->name, array('class' => 'form-control')) !!}
                {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
              </div>
              <div class="form-group {!! $errors->first('description', 'has-error') !!}">
                {!! Form::label('description', 'Album Description : ') !!}
                {!! Form::text('description', $album->description, array('class' => 'form-control')) !!}
                {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group {!! $errors->first('cover_image', 'has-error') !!}">
                {!! Form::label('cover_image', 'Banner : ') !!}
                {!! Form::file('cover_image') !!}
                @if(isset($album))
                <p class="help-block"><img src="/uploads/albums/{!! $album->cover_image !!}" alt="" width="100px;"></p>
                @else
                <p class="help-block">Banner for album</p>
                @endif
                {!! $errors->first('cover_image', '<span class="help-block">:message</span>') !!}
              </div>
            </div>
          </div>
          <div class="form-group">
            {!! Form::submit('Create Album', array('class' => 'btn btn-primary')) !!}
          </div>
        </section>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</section>

@stop