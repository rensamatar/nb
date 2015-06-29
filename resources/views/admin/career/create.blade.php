@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Create</h3>
					</div><!-- /.box-header -->

					<div class="box-body">
						{!! Form::open(array('url' => 'careers')) !!}

						@include('admin.career.form', array('buttonText' => 'Add career'))

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

@stop