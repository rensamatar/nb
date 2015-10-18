@extends('admin.layouts.app')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Staff<small>บุคลากรของนาบุญฯ</small></h1>
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
				<div class="box-body">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th style="width: 10px">#</th>
								<th>Name</th>
								<th>Nickname</th>
								<th>Position</th>
								<th>Phone</th>
								<th style="width: 40px">Edit</th>
								<th style="width: 40px">Trash</th>
							</tr>
							@var $i = 1
							@foreach ($members as $staff)
							<tr>
								<td>{!! $i++ !!}</td>
								<td>
									<a href="{!! url('admin/staff/' .$staff->id. '/view') !!}">{{ $staff->name }}</a>
								</td>
								<td>
									<p>{!! $staff->nickname !!}</p>
								</td>
								<td>
									<p>{!! $staff->position !!}</p>
								</td>
								<td>
									<p>{!! $staff->phone !!}</p>
								</td>
								<td>
									<a href="{!! url('admin/staff/' .$staff->id.'/edit') !!}">
										<span class="badge bg-green"><i class="fa fa-pencil"></i></span>
									</a>
								</td>
								<td>
									<a href="{!! url('admin/staff/' .$staff->id.'/delete') !!}" onclick="return confirm('Are you sure ?')">
										<span class="badge bg-red"><i class="fa fa-trash"></i></span>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div><!-- /.box-body -->

				<div class="box-footer clearfix">
					@include('vendor.admin-pagination', ['paginator' => $members])
				</div>
			</div><!-- /.box -->
		</div>
	</div>
</section>

@stop