<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group {!! $errors->first('title', 'has-error') !!}">
				{!! Form::label('title', 'Title : ') !!}
				{!! Form::text('title', null, array('class' => 'form-control')) !!}
				{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('published_date', 'has-error') !!}">
				{!! Form::label('published_date', 'Published On : ') !!}
				{!! Form::input('date', 'published_date', date('Y-m-d'), array('class' => 'form-control')) !!}
				{!! $errors->first('published_date', '<span class="help-block">:message</span>') !!}
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
		</div>
	</div>

	<div class="form-group {!! $errors->first('body', 'has-error') !!}">
		{!! Form::label('body', 'Body : ') !!}
		{!! Form::textarea('body', null, array('class' => 'form-control', 'id' => 'content-editor')) !!}
		{!! $errors->first('body', '<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group">
		{!! Form::submit($buttonText, array('class' => 'btn btn-primary')) !!}
	</div>
</section>

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
		$('#content-editor').summernote({ height: 300, minHeight: null, maxHeight: null });
	});
</script>
@stop