<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group {!! $errors->first('name', 'has-error') !!}">
				{!! Form::label('name', 'Name : ') !!}
				{!! Form::text('name', null, array('class' => 'form-control')) !!}
				{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('nickname', 'has-error') !!}">
				{!! Form::label('nickname', 'Nickname : ') !!}
				{!! Form::text('nickname', null, array('class' => 'form-control')) !!}
				{!! $errors->first('nickname', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('position', 'has-error') !!}">
				{!! Form::label('position', 'Position : ') !!}
				{!! Form::text('position', null, array('class' => 'form-control')) !!}
				{!! $errors->first('position', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('phone', 'has-error') !!}">
				{!! Form::label('phone', 'Phone : ') !!}
				{!! Form::text('phone', null, array('class' => 'form-control')) !!}
				{!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group {!! $errors->first('image', 'has-error') !!}">
				{!! Form::label('image', 'Image : ') !!}
				{!! Form::file('image') !!}
				@if(isset($image))
				<p class="help-block"><img src="{!! $staff->thumbnail() !!}" alt=""></p>
				@else
				<p class="help-block">Photo for staff</p>
				@endif
				{!! $errors->first('image', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
	</div>

	<div class="form-group">
		{!! Form::submit($buttonText, array('class' => 'btn btn-primary')) !!}
	</div>
</section>
