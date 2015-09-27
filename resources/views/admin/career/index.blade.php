@extends('admin.layouts.app')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Career<small>งานที่ประกาศรับสมัคร</small></h1>
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
					<h3 class="box-title">Career Table</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th style="width: 10px">#</th>
								<th>Title</th>
								<th>Created at</th>
								<th style="width: 40px">Edit</th>
								<th style="width: 40px">Trash</th>
							</tr>
							@var $i = 1
							@foreach ($careers as $career)
							<tr>
								<td>{!! $i++ !!}</td>
								<td>
									<a href="{{ url('admin/career', $career->id) }}">{{ $career->title }}</a>
								</td>
								<td>
									<p>{{ $career->created_at->diffForHumans() }}</p>
								</td>
								<td>
									<a href="{!! url('admin/career/' .$career->id.'/edit') !!}">
										<span class="badge bg-green"><i class="fa fa-pencil"></i></span>
									</a>
								</td>
								<td>
									<a href="{!! url('admin/career/' .$career->id.'/delete') !!}">
										<span class="badge bg-red"><i class="fa fa-trash"></i></span>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div><!-- /.box-body -->

				<div class="box-footer clearfix">
					@include('vendor.admin-pagination', ['paginator' => $careers])
				</div>
			</div><!-- /.box -->
		</div>
	</div>
</section>

@stop