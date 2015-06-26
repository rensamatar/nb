@extends('layouts.default')
@section('content')

<div class="nb-container">

	@include('pages.google-map')

	<section class="contact-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-6 panel-left padding-bottom">
					<h2>Let’s talk. Or meet in person.</h2>
					<p>
						We are always happy to make valuable new contacts and are looking forward to receiving your mail or call. Even if you’re not sure we’ll be the right ones for your project. We’re always open to a chat and will be happy to help – of course also in person, wherever you are.
					</p>
				</div>
				<div class="col-md-6 panel-right padding-bottom">
					<h2>Where to find us</h2>
					<p>Nabun Upgrade International Co.,Ltd</p>
					<p>230/49 หมู่ 11 ตำบลทุ่งสุขลา</p>
					<p>อำเภอศรีราชา ชลบุรี 20230</p>
					<p>Phone : (038) 763025</p>
				</p>
			</div>
		</div>
	</div>
</section>

<section class="contact-form text-center">
	<div class="container">
		<h1>Write to us</h1>
		<form action="#">
			<div class="row form-wrapper">
				<div class="col-md-5 col-md-offset-1">
					<input type="text" name="name" value="" placeholder="Your name" required>
					<input type="email" name="email" value="" placeholder="Your e-mail" required>
					<input type="text" name="subject" value="" placeholder="Subject" required>
				</div>
				<div class="col-md-5">
					<textarea name="message" placeholder="Your message" required></textarea>
					<input class="pull-right" type="submit" name="submit" value="Send message">
				</div>
			</div>
		</form>
	</div>
</section>

@stop