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
						<h3 class="box-title">{{ $career->title }}</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
						{{ $career->body }}
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
@stop