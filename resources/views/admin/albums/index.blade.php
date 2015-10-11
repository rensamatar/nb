@extends('admin.layouts.app')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Gallery<small>ภาพกิจกรรมนาบุญ</small></h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Gallery Table</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th style="width: 10px">#</th>
								<th>Cover</th>
								<th>Album Name</th>
								<th>Description</th>
								<th style="width: 40px">Edit</th>
								<th style="width: 40px">Trash</th>
							</tr>
							@var $i = 1
							@foreach ($albums as $item)
							<tr>
								<td>{!! $i++ !!}</td>
								<td>
									<img class="" src="/uploads/albums/{!! $item->cover_image !!}" width="80px">
								</td>
								<td>
									<a href="{!! url('admin/albums', $item->id) !!}">{!! $item->name !!}</a>
								</td>
								<td>
									<p>{!! $item->description !!}</p>
								</td>
								<td>
									<a href="{!! url('admin/albums/edit/' .$item->id) !!}">
										<span class="badge bg-green"><i class="fa fa-pencil"></i></span>
									</a>
								</td>
								<td>
									<a href="{!! route('delete_album', array('id' => $item->id))!!}" onclick="return confirm('Are you sure?')">
										<span class="badge bg-red"><i class="fa fa-trash"></i></span>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div><!-- /.box-body -->

			</div><!-- /.box -->
		</div>
	</div>
</section>

@stop