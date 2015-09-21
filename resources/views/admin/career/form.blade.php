<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group {!! $errors->first('title', 'has-error') !!}">
				{!! Form::label('title', 'Title : ') !!}
				{!! Form::text('title', null, array('class' => 'form-control')) !!}
				{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('attribute', 'has-error') !!}">
				{!! Form::label('attribute', 'Detail : ') !!}
				{!! Form::text('attribute', null, array('class' => 'form-control')) !!}
				{!! $errors->first('attribute', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('gender', 'has-error') !!}">
				{!! Form::label('gender', 'Gender : ') !!}
				{!! Form::text('gender', null, array('class' => 'form-control')) !!}
				{!! $errors->first('gender', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('age', 'has-error') !!}">
				{!! Form::label('age', 'Age : ') !!}
				{!! Form::text('age', null, array('class' => 'form-control')) !!}
				{!! $errors->first('age', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('qualifications', 'has-error') !!}">
				{!! Form::label('qualifications', 'Qualifications : ') !!}
				{!! Form::text('qualifications', null, array('class' => 'form-control')) !!}
				{!! $errors->first('qualifications', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group {!! $errors->first('banner', 'has-error') !!}">
				{!! Form::label('banner', 'Image : ') !!}
				{!! Form::file('banner') !!}
				@if(isset($career))
				<p class="help-block"><img src="{!! $career->thumbnail() !!}" alt=""></p>
				@else
				<p class="help-block">Banner for Career</p>
				@endif
				{!! $errors->first('banner', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('published_date', 'has-error') !!}">
				{!! Form::label('published_date', 'Published On : ') !!}
				{!! Form::input('date', 'published_date', date('Y-m-d'), array('class' => 'form-control')) !!}
				{!! $errors->first('published_date', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group {!! $errors->first('wage_1', 'has-error') !!}">
				{!! Form::label('wage_1', 'wage_1 : ') !!}
				{!! Form::text('wage_1', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_1', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('wage_2', 'has-error') !!}">
				{!! Form::label('wage_2', 'wage_2 : ') !!}
				{!! Form::text('wage_2', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_2', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('wage_3', 'has-error') !!}">
				{!! Form::label('wage_3', 'wage_3 : ') !!}
				{!! Form::text('wage_3', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_3', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('wage_4', 'has-error') !!}">
				{!! Form::label('wage_4', 'wage_4 : ') !!}
				{!! Form::text('wage_4', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_4', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('wage_5', 'has-error') !!}">
				{!! Form::label('wage_5', 'wage_5 : ') !!}
				{!! Form::text('wage_5', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_5', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('wage_6', 'has-error') !!}">
				{!! Form::label('wage_6', 'wage_6 : ') !!}
				{!! Form::text('wage_6', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_6', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('wage_7', 'has-error') !!}">
				{!! Form::label('wage_7', 'wage_7 : ') !!}
				{!! Form::text('wage_7', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_7', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('wage_8', 'has-error') !!}">
				{!! Form::label('wage_8', 'wage_8 : ') !!}
				{!! Form::text('wage_8', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_8', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group {!! $errors->first('wage_9', 'has-error') !!}">
				{!! Form::label('wage_9', 'wage_9 : ') !!}
				{!! Form::text('wage_9', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_9', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('wage_10', 'has-error') !!}">
				{!! Form::label('wage_10', 'wage_10 : ') !!}
				{!! Form::text('wage_10', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_10', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('wage_11', 'has-error') !!}">
				{!! Form::label('wage_11', 'wage_11 : ') !!}
				{!! Form::text('wage_11', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_11', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('wage_12', 'has-error') !!}">
				{!! Form::label('wage_12', 'wage_12 : ') !!}
				{!! Form::text('wage_12', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_12', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('wage_13', 'has-error') !!}">
				{!! Form::label('wage_13', 'wage_13 : ') !!}
				{!! Form::text('wage_13', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_13', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('wage_14', 'has-error') !!}">
				{!! Form::label('wage_14', 'wage_14 : ') !!}
				{!! Form::text('wage_14', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_14', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('wage_15', 'has-error') !!}">
				{!! Form::label('wage_15', 'wage_15 : ') !!}
				{!! Form::text('wage_15', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_15', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('wage_16', 'has-error') !!}">
				{!! Form::label('wage_16', 'wage_16 : ') !!}
				{!! Form::text('wage_16', null, array('class' => 'form-control')) !!}
				{!! $errors->first('wage_16', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-3">
			<div class="form-group {!! $errors->first('staff_1', 'has-error') !!}">
				{!! Form::label('staff_1', 'Staff 1') !!}
				{!! Form::staff('staff_1', (isset($career) ? $career->staff_1 : ''), 'form-control') !!}
				{!! $errors->first('staff_1', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group {!! $errors->first('staff_2', 'has-error') !!}">
				{!! Form::label('staff_2', 'Staff 2') !!}
				{!! Form::staff('staff_2', (isset($career) ? $career->staff_2 : ''), 'form-control') !!}
				{!! $errors->first('staff_2', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group {!! $errors->first('staff_3', 'has-error') !!}">
				{!! Form::label('staff_3', 'Staff 3') !!}
				{!! Form::staff('staff_3', (isset($career) ? $career->staff_3 : ''), 'form-control') !!}
				{!! $errors->first('staff_3', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group {!! $errors->first('staff_4', 'has-error') !!}">
				{!! Form::label('staff_4', 'Staff 4') !!}
				{!! Form::staff('staff_4', (isset($career) ? $career->staff_4 : ''), 'form-control') !!}
				{!! $errors->first('staff_4', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
	</div>

	<div class="form-group">
		{!! Form::submit($buttonText, array('class' => 'btn btn-primary')) !!}
	</div>
</section>
