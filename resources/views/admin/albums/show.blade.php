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

  <section class="content">
    <div class="row">
      <div class="col-md-3">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">{!! $album->name !!}</h3>
          </div>
          <div class="box-body">
            <img class="media-object"alt="{!! $album->name !!}" src="/uploads/albums/{!! $album->cover_image !!}" width="100%">
            <p>{!! $album->description !!}<p>
             <a href="{!! route('add_image',array('id' => $album->id)) !!}">
              <button type="button" class="btn btn-primary">Add Image</button>
            </a>
            <a href="{!! route('delete_album',array('id'=>$album->id))!!}" onclick="return confirm('Are you sure?')">
              <button type="button"class="btn btn-danger btn-large">Delete Album</button>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">All photos</h3>
          </div>
          <div class="box-body">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <th style="width: 100px">#</th>
                  <th>Album Name</th>
                  <th>Description</th>
                  <th>Created Date</th>
                  <th style="width: 40px">Trash</th>
                </tr>
                @foreach($album->Photos as $photo)
                <tr>
                  <td>
                    <img src="/uploads/albums/{!! $photo->image !!}" width="100px">
                  </td>
                  <td>
                    <p>{!! $album->name !!}</p>
                  </td>
                  <td>
                    <p>{!! $photo->description !!}</p>
                  </td>
                  <td>
                    <p>{!! $photo->created_at !!}</p>
                  </td>
                  <td>
                    <a href="{!! route('delete_image',array('id' => $photo->id)) !!}" onclick="return confirm('Are you sure?')">
                      <span class="badge bg-red"><i class="fa fa-trash"></i></span>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table> 
          </div>
        </div>
      </div>
    </div>

  </section>

  @stop



