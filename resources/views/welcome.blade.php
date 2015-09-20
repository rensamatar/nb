@extends('layouts.default')
@section('content')

<!-- ==== HEADERWRAP ==== -->
<div id="headerwrap" name="home">
	<header class="clearfix">
		<h1 class="animated fadeInDown delay-05s">Nabun Upgrade International</h1>
		<p class="animated fadeInUp delay-1s">การบริหารงานทรัพยากรมนุษย์<br>เพื่อเพิ่มผลผลิต
		</p>
		<a href="#" class="animated fadeInDown delay-1s btn btn-lg">Download CSV</a>
	</header>
</div>

<!-- ==== ABOUT ==== -->
<div id="about" name="about">
	<div class="container wow fadeInUp">
		<div class="row white">
			<div class="col-md-6"><img class="img-responsive" src="{!! asset('img/about1.jpg') !!}"></div>
			<div class="col-md-6">
				<h3>About us</h3>
				<p>
					We always happy to make valuable new contacts and are looking forward to receiving your mail or call. Even if you’re not sure we’ll be the right ones for your project. We’re always open to a chat and will be happy to help – of course also in person, wherever you are.
				</p>
				<h3>Why choose us?</h3>
				<p>
					We always send employees with good quality service to every industry needed in operation of business such as: production staff, warehouseing staff, packing staff, quality control staff, foreman, sales representatives, sales assistants to department stores. Administration staff such as: computer clerk staff, messenger, housekeeper or cleaners and car-drivers.
				</p>
			</div>
		</div>
	</div>
</div>

<!-- ==== SERVICES ==== -->
<div id="services" name="services">
	<div class="container">
		<div class="row">
			<h2 class="centered">Who we are?</h2>
			<span class="border"></span>
			<div class="col-lg-8 col-lg-offset-2">
				<p class="large">We are group of professionals focused on sub-contract service and human resource consultant.</p>
			</div>
			<div class="col-lg-4"> <i class="fa fa-eye fa-4x"></i>
				<h3>Vision</h3>
				<p>To be a leading organization in terms of service through Sub-contract, that businesses needed.</p>
			</div>
			<div class="col-lg-4"> <i class="fa fa-dot-circle-o fa-4x"></i>
				<h3>Mission</h3>
				<p>
					To have a good and efficient management.<br>
					To have a well-educated and skilled personnel.<br>
					To have an efficient Information Technology System.
				</p>
			</div>
			<div class="col-lg-4"> <i class="fa fa-lightbulb-o fa-4x"></i>
				<h3>Philosophy</h3>
				<p>
					Service mind.<br>
					Adherence to the rule of success.<br>
					Ethics in doing business.
				</p>
			</div>
		</div>
	</div>
</div>

<!-- ===== Testimonial ===== -->
<div id="testimonial">
	<div class="container">
		<div class="row">
			<div class="centered">
				<img class="img img-circle" src="{!! asset('img/team/phichet.png') !!}" height="160px" width="160px" alt="">
				<blockquote>
					<p class="large">
						People-oriented, United as One, Committed, Work-oriented<br />
						Energetic, Well-organized and Efficient, <br />
						Open-minded, Enthusiastic, Service-minded.
					</p>
					<footer class="">CEO, Dr.Phicheat Wongsawat</footer>
				</blockquote>
			</div>
		</div>
	</div>
</div>

<!-- ==== TEAM MEMBERS ==== -->
<div id="team" name="team">
	<div class="container">
		<div class="row centered">
			<h2 class="centered">Our Team</h2>
			<span class="border"></span>
			<div class="col-lg-3 centered bottom">
				<img class="img img-circle" src="{!! asset('img/team/anucha.png') !!}" height="120px" width="120px" alt="">
				<h4>นายอนุชา เจียมสกุลทิพย์</h4>
				<p>ผู้จัดการฝ่ายทรัพยากรมนุษย์</p>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
			</div>
			<div class="col-lg-3 centered bottom">
				<img class="img img-circle" src="{!! asset('img/team/wethinee.png') !!}" height="120px" width="120px" alt="">
				<h4>นางเวธินี จงจิตกลาง</h4>
				<p>ผู้จัดการฝ่ายเงินเดือนและค่าจ้าง</p>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
			</div>
			<div class="col-lg-3 centered bottom">
				<img class="img img-circle" src="{!! asset('img/team/pratuang.png') !!}" height="120px" width="120px" alt="">
				<h4>นายประเทือง ปั้นแจ่ม</h4>
				<p>ผู้จัดการฝ่ายสรรหาและคัดเลือกบุคลากร</p>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
			</div>
			<div class="col-lg-3 centered bottom">
				<img class="img img-circle" src="{!! asset('img/team/chareeporn.png') !!}" height="120px" width="120px" alt="">
				<h4>นางสาวชรีพร เทพมงคล</h4>
				<p>ผู้จัดการฝ่ายแรงงานสัมพันธ์</p>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
			</div>
		</div>

		<div class="row centered">
			<div class="col-lg-3 centered">
				<img class="img img-circle" src="{!! asset('img/team/amonrat.png') !!}" height="120px" width="120px" alt="">
				<h4>นางสาวอมรรัตน์ มาธุระ</h4>
				<p>ผู้จัดการฝ่ายบัญชีและการเงิน</p>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
			</div>
			<div class="col-lg-3 centered">
				<img class="img img-circle" src="{!! asset('img/team/akira.png') !!}" height="120px" width="120px" alt="">
				<h4>นายอคิราภ์ ลำจวง</h4>
				<p>ผู้จัดการฝ่ายทรัพยากรมนุษย์</p>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
			</div>
			<div class="col-lg-3 centered">
				<img class="img img-circle" src="{!! asset('img/team/charnchai.png') !!}" height="120px" width="120px" alt="">
				<h4>นายชาญชัย ดาวงษ์</h4>
				<p>ผู้จัดการฝ่ายความปลอดภัยการทำงาน</p>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
			</div>
			<div class="col-lg-3 centered">
				<img class="img img-circle" src="{!! asset('img/team/jantra.png') !!}" height="120px" width="120px" alt="">
				<h4>นางสาวจันทรา ทองสามสี</h4>
				<p>ผู้จัดการฝ่ายการตลาด</p>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- ==== CAREERS ==== -->
<div id="careers" name="careers">
	<div class="container">
		<div class="row">
			<h2 class="centered">We Hiring</h2>
			<span class="border"></span>
			<div class="col-lg-8 col-lg-offset-2 centered">
				<p class="large">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.
				</p>
			</div>
		</div>

		<div class="container">
			<div class="row"> 
				@foreach($careers as $career)
				<div class="col-md-4 ">
					<div class="grid mask">
						<figure><img class="img-responsive" src="{!! asset('img/dummy.jpg') !!}" alt="">
							<figcaption>
								<h5>{!! str_limit($career->title, $limit = 100, $end = '...') !!}<br>ผลิตเครื่องปรับอากาศ</h5>
								<a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a>
							</figcaption>
						</figure>
					</div>
				</div>
				@endforeach
			</div>

			<div class="row"> 

			</div>
		</div>
		<div class="row centered">
			<a href="{!! url('careers') !!}" class="btn btn-lg">View All</a>
		</div>
	</div>
</div>


<!-- ===== Fun Fact ==== -->
<div id="fun-facts">
	<div class="container">
		<div class="row">
			<h2 class="centered">Fun Facts</h2>
			<span class="border"></span>

			<div class="col-md-3">
				<div class="de_count">
					<i class="fa fa-clock-o fa-5x fadeInDown"></i>
					<h3 class="timer" data-to="1980" data-speed="2500">1980</h3>
					<span class="sub-title">Hours of Works</span>
				</div>
			</div>

			<div class="col-md-3">
				<div class="de_count">
					<i class="fa fa-desktop fa-5x fadeInDown"></i>
					<h3 class="timer" data-to="1280" data-speed="2500">50</h3>
					<span class="sub-title">Winning Awards</span>
				</div>
			</div>

			<div class="col-md-3">
				<div class="de_count">
					<i class="fa fa-leaf fa-5x fadeInDown"></i>
					<h3 class="timer" data-to="750" data-speed="2500">21</h3>
					<span class="sub-title">Happy Clients</span>
				</div>
			</div>

			<div class="col-md-3">
				<div class="de_count">
					<i class="fa fa-coffee fa-5x fadeInDown"></i>
					<h3 class="timer" data-to="520" data-speed="2500">520</h3>
					<span class="sub-title">Cups of Coffee</span>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- ==== Clients ==== -->
<div id="client" name="client">
	<div class="container">
		<div class="row">
			<h2 class="centered">Our Clients</h2>
			<span class="border"></span>

			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/fujitsu.png') !!}" class="img-animate" alt="client logo">
			</div>
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/gm.png') !!}" class="img-animate" alt="client logo">
			</div>
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/emerson.png') !!}" class="img-animate" alt="client logo">
			</div>
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/cerebos.png') !!}" class="img-animate" alt="client logo">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/samsung.png') !!}" class="img-animate" alt="client logo">
			</div>
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/slab.png') !!}" class="img-animate" alt="client logo">
			</div>
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/srab.png') !!}" class="img-animate" alt="client logo">
			</div>
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/tokai.png') !!}" class="img-animate" alt="client logo">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/sji.png') !!}" class="img-animate" alt="client logo">
			</div>
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/takahata.png') !!}" class="img-animate" alt="client logo">
			</div>
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/tft.png') !!}" class="img-animate" alt="client logo">
			</div>
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/amaka.png') !!}" class="img-animate" alt="client logo">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/sumitomo.png') !!}" class="img-animate" alt="client logo">
			</div>
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/teknia.png') !!}" class="img-animate" alt="client logo">
			</div>
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/wellpack.png') !!}" class="img-animate" alt="client logo">
			</div>
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/yamahatsu.png') !!}" class="img-animate" alt="client logo">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/titan.png') !!}" class="img-animate" alt="client logo">
			</div>
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/dhl.png') !!}" class="img-animate" alt="client logo">
			</div>
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/brand.png') !!}" class="img-animate" alt="client logo">
			</div>
			<div class="col-md-3 centered">
				<img src="{!! asset('img/logo/kobelco.png') !!}" class="img-animate" alt="client logo">
			</div>
		</div>
	</div>
</div>

<!-- ==== CONTACT ==== -->
<div id="contact" name="contact">
	<div class="container">
		<div class="row">
			<h2 class="centered">Contact Us</h2>
			<span class="border"></span>

			<div class="col-md-4 centered"> <i class="fa fa-map-marker fa-2x"></i>
				<p>230/49 หมู่ 11 ตำบลทุ่งสุขลา<br>
					อำเภอศรีราชา ชลบุรี 20230</p>
				</div>
				<div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
					<p>info@companyname.com</p>
				</div>
				<div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
					<p>(038) 763025</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 centered">
					<p>Get in touch with us. Feel Free to use contact below.</p>
					{!! Form::open(array('url' => 'contact')) !!}
					<div class="row form-wrapper">
						<div class="col-md-5 col-md-offset-1">
							<input placeholder="Your name" required="required" name="name" type="text">
							<input placeholder="Your e-mail" required="required" name="email" type="email">
							<input placeholder="Subject" required="required" name="subject" type="text">
						</div>
						<div class="col-md-5">
							<textarea placeholder="Your message" required="required" name="message" cols="50" rows="10"></textarea>
							<input class="pull-right" type="submit" value="Send message">
						</div>
					</div>
					{!! Form::close() !!}
					<!-- form --> 
				</div>
			</div>
			<!-- row --> 

		</div>
	</div>
	<!-- container -->

	@stop