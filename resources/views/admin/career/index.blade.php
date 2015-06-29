@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Career<small>Version 2.0</small></h1>
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

								@foreach ($careers as $career)
								<tr>
									<td>1.</td>
									<td>
										<a href="{{ url('/career', $career->id) }}">{{ $career->title }}</a>
									</td>
									<td>
										<p>{{ $career->created_at->diffForHumans() }}</p>
									</td>
									<td><span class="badge bg-green"><i class="fa fa-pencil"></i></span></td>
									<td><span class="badge bg-red"><i class="fa fa-trash"></i></span></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div><!-- /.box-body -->

					<div class="box-footer clearfix">
						<ul class="pagination pagination-sm no-margin pull-right">
							<li><a href="#">«</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">»</a></li>
						</ul>
					</div>
				</div><!-- /.box -->
			</div>
		</div>
	</section>

</div>
@stop