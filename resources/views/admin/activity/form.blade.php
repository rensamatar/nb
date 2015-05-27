<div class="form-group">
	{!! Form::label('title', 'Title : ') !!}
	{!! Form::text('title', null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
	{!! Form::label('body', 'Body : ') !!}
	{!! Form::textarea('body', null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
	{!! Form::label('published_date', 'Published On : ') !!}
	{!! Form::input('date', 'published_date', date('Y-m-d'), array('class' => 'form-control')) !!}
</div>

<div class="form-group">
	{!! Form::submit($buttonText, array('class' => 'btn btn-primary')) !!}
</div>