@extends('layouts.default')
@section('content')

<div id="blog" name="blog" data-parallax="scroll" data-image-src="{!! asset('img/bg-subheader.jpg') !!}">
	<div class="container">
		<div class="row wow fadeInUp delay-1s">
			<h2>Keep in touch</h2>
			<div class="col-sm-10 col-sm-offset-1 wow fadeInUp delay-15s">
				<p class="created-date">ติดต่อเรา</p>
			</div>
		</div>
	</div>
</div>


<div id="find-us" class="container">
	<div class="row">
		<div class="col-md-6">
			<h3>Let’s talk. Or meet in person.</h3>
			<p>
				We are always happy to make valuable new contacts and are looking forward to receiving your mail or call. Even if you’re not sure we’ll be the right ones for your project. We’re always open to a chat and will be happy to help – of course also in person, wherever you are.
			</p>
		</div>
		<div class="col-md-6">
			<h3>Where to find us</h3>
			<p>
				Nabun Upgrade International Co.,LTD<br/>
				230/49 M.11 Nongkham, Sri Racha, Chonburi, Thailand 20230<br/>
				Phone : (038) 763025
			</p>
		</div>
	</div>
</div>
<div id="find-us-form" class="parallax dark-section" data-parallax="scroll" data-image-src="{!! asset('img/img-06.jpg') !!}">
	<div class="container">
		<h2>Write to us</h2>
		{!! Form::open(array('url' => 'contact')) !!}
		<div class="row form-wrapper">
			<div class="col-md-5 col-md-offset-1">
				{!! Form::text('name', Input::old('name'), array('placeholder' => 'Your name', 'required')) !!}
				{!! Form::email('email', Input::old('email'), array('placeholder' => 'Your e-mail', 'required')) !!}
				{!! Form::text('subject', Input::old('subject'), array('placeholder' => 'Subject', 'required')) !!}
			</div>
			<div class="col-md-5">
				{!! Form::textarea('message', Input::old('message'), array('placeholder' => 'Your message', 'required')) !!}
				{!! Form::submit('Send message', array('class' => 'pull-right')) !!}
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>

@include('pages.google-map')

@stop