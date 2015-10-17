@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Career<small>details</small></h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">View</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">

		<!-- Career detail -->
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">{!! $career->title !!}</h3>
				</div>

				<div class="box-body">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th style="width: 30%;">Label</th>
								<th>Description</th>
							</tr>
							<tr>
								<td><strong>Title</strong></td>
								<td>{!! $career->title !!}</td>
							</tr>
							<tr>
								<td><strong>Detail</strong></td>
								<td>{!! $career->attribute !!}</td>
							</tr>
							<tr>
								<td><strong>Gender</strong></td>
								<td>{!! $career->gender !!}</td>
							</tr>
							<tr>
								<td><strong>Age</strong></td>
								<td>{!! $career->age !!}</td>
							</tr>
							<tr>
								<td><strong>Qualifications</strong></td>
								<td>{!! $career->qualifications !!}</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="box-footer text-right">
					<a class="btn btn-info" href="{!! url('admin/career/' . $career->id . '/edit') !!}">Edit</a>
				</div>
			</div>

			<!-- Career Staff -->
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Staff of {!! $career->title !!}</h3>
				</div>

				<div class="box-body">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>Name</th>
								<th>Phone</th>
								<th style="width: 80px;">Actions</th>
							</tr>
							@foreach ($members as $member)
							<tr>
								<td>
									{!! $member->staff->name !!} 
									<a href="{!! url('admin/staff/' . $member->staff->id . '/edit') !!}" class="badge">{!! $member->staff->nickname !!}</a>
								</td>
								<td>{!! $member->staff->phone !!}</td>
								<td class="text-center">
									<a href="{!! url('admin/sub/' . $member['id'] . '/edit') !!}" class="btn btn-xs btn-info">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="{!! url('admin/sub/' . $member['id'] . '/delete') !!}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure ?')">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>

				<div class="box-footer text-right">
					<a class="btn btn-info" href="{!! url('admin/sub/' . $career->id . '/create') !!}">Add</a>
				</div>
			</div>

		</div>

		<!-- Wage detail -->
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Wage of {!! $career->title !!}</h3>
				</div>

				<div class="box-body">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>Title</th>
								<th style="width: 80px;">Actions</th>
							</tr>
							@foreach ($wages as $wage)
							<tr>
								<td>{!! $wage['title'] !!}</td>
								<td class="text-center">
									<a href="{!! url('admin/wage/' . $wage['id'] . '/edit') !!}" class="btn btn-xs btn-info">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="{!! url('admin/wage/' . $wage['id'] . '/delete') !!}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure ?')">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>

				<div class="box-footer text-right">
					<a class="btn btn-info" href="{!! url('admin/wage/' . $career->id . '/create') !!}">Add</a>
				</div>
			</div>
		</div>

	</div>
</section>

@stop