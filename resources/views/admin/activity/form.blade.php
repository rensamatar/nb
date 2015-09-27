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
				{!! Form::label('banner', 'Banner : ') !!}
				{!! Form::file('banner') !!}
				@if(isset($activity))
				<p class="help-block"><img src="{!! $activity->thumbnail() !!}" alt=""></p>
				@else
				<p class="help-block">Banner for activity</p>
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

	<hr>
	<div class="row">
		<div class="col-md-3">
			<div class="form-group {!! $errors->first('img_file_01', 'has-error') !!}">
				{!! Form::label('img_file_01', 'Image 01 : ') !!}
				{!! Form::file('img_file_01') !!}
				@if(isset($activity))
				<p class="help-block"><img src="{!! $activity->thumbnail_01() !!}" alt=""></p>
				@else
				<p class="help-block">ภาพประกอบ</p>
				@endif
				{!! $errors->first('img_file_01', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('img_file_02', 'has-error') !!}">
				{!! Form::label('img_file_02', 'Image 02 : ') !!}
				{!! Form::file('img_file_02') !!}
				@if(isset($activity))
				<p class="help-block"><img src="{!! $activity->thumbnail_02() !!}" alt=""></p>
				@else
				<p class="help-block">ภาพประกอบ</p>
				@endif
				{!! $errors->first('img_file_02', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group {!! $errors->first('img_file_03', 'has-error') !!}">
				{!! Form::label('img_file_03', 'Image 03 : ') !!}
				{!! Form::file('img_file_03') !!}
				@if(isset($activity))
				<p class="help-block"><img src="{!! $activity->thumbnail_03() !!}" alt=""></p>
				@else
				<p class="help-block">ภาพประกอบ</p>
				@endif
				{!! $errors->first('img_file_03', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('img_file_04', 'has-error') !!}">
				{!! Form::label('img_file_04', 'Image 04 : ') !!}
				{!! Form::file('img_file_04') !!}
				@if(isset($activity))
				<p class="help-block"><img src="{!! $activity->thumbnail_04() !!}" alt=""></p>
				@else
				<p class="help-block">ภาพประกอบ</p>
				@endif
				{!! $errors->first('img_file_04', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group {!! $errors->first('img_file_05', 'has-error') !!}">
				{!! Form::label('img_file_05', 'Image 05 : ') !!}
				{!! Form::file('img_file_05') !!}
				@if(isset($activity))
				<p class="help-block"><img src="{!! $activity->thumbnail_05() !!}" alt=""></p>
				@else
				<p class="help-block">ภาพประกอบ</p>
				@endif
				{!! $errors->first('img_file_05', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('img_file_06', 'has-error') !!}">
				{!! Form::label('img_file_06', 'Image 06 : ') !!}
				{!! Form::file('img_file_06') !!}
				@if(isset($activity))
				<p class="help-block"><img src="{!! $activity->thumbnail_06() !!}" alt=""></p>
				@else
				<p class="help-block">ภาพประกอบ</p>
				@endif
				{!! $errors->first('img_file_06', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group {!! $errors->first('img_file_07', 'has-error') !!}">
				{!! Form::label('img_file_07', 'Image 07 : ') !!}
				{!! Form::file('img_file_07') !!}
				@if(isset($activity))
				<p class="help-block"><img src="{!! $activity->thumbnail_07() !!}" alt=""></p>
				@else
				<p class="help-block">ภาพประกอบ</p>
				@endif
				{!! $errors->first('img_file_07', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {!! $errors->first('img_file_08', 'has-error') !!}">
				{!! Form::label('img_file_08', 'Image 08 : ') !!}
				{!! Form::file('img_file_08') !!}
				@if(isset($activity))
				<p class="help-block"><img src="{!! $activity->thumbnail_08() !!}" alt=""></p>
				@else
				<p class="help-block">ภาพประกอบ</p>
				@endif
				{!! $errors->first('img_file_08', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
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