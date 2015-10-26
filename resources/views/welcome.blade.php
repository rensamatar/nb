@extends('layouts.default')
@section('content')

<!-- HERO -->
<section id="hero" class="section-hero">
	<header class="clearfix">
		<h1 class="animated fadeInDown delay-05s">Nabun Upgrade International</h1>
		<p class="animated fadeInDown delay-1s">
			การบริหารงานทรัพยากรมนุษย์ เพื่อเพิ่มผลผลิต
		</p>
		<a href="#" class="animated fadeInDown delay-15s btn btn-lg">Download CSV</a>
		<div class="scroll-down">
			<div class="mouse"><span></span></div>
		</div>
	</header>
</section>

<!-- ABOUT -->
<section id="about" class="light-section">
	<div class="container">
		<div class="row white">
			<h2 class="wow fadeInDown delay-02s">About Us</h2>
			<span class="border"></span>
			<div class="col-lg-8 col-lg-offset-2 centered">
				<p class="large">
					We always happy to make valuable new contacts and are looking forward to receiving your mail or call. Even if you’re not sure we’ll be the right ones for your project. We’re always open to a chat and will be happy to help – of course also in person, wherever you are.
				</p>
			</div>
		</div>
		<div class="row centered">
			<a href="{!! url('about') !!}" class="btn btn-lg">Read More</a>
		</div>
	</div>
</section>

<!-- SERVICES -->
<section id="services" class="parallax dark-section" data-parallax="scroll" data-image-src="{!! asset('img/img-02.jpg') !!}">
	<div class="container">
		<div class="row">
			<h2 class="wow fadeInDown delay-1s">Who we are</h2>
			<span class="border"></span>
			<div class="col-lg-8 col-lg-offset-2 wow fadeInDown delay-15s">
				<p class="large">
					เราคือผู้นำทางด้านบริหารจัดการ sub-contract และให้คำปรึกษาด้านทรัพยากรมนุษย์</p>
				</div>
				<div class="col-lg-4 wow slideInLeft">
					<i class="icon icon-telescope"></i>
					<h3>Vision</h3>
					<p>เป็นองค์กรชั้นนำในการบริการจัดการด้าน<br>
						sub-contract อันเป็นที่ต้องการของธุรกิจ</p>
					</div>
					<div class="col-lg-4 wow fadeIn">
						<i class="icon icon-layers"></i>
						<h3>Mission</h3>
						<p>
							มีการบริหารองค์กรที่ดีมีประสิทธิภาพ<br>
							มีบุคลากรที่มีความรู้และทักษะสูง<br>
							มีระบบสารสนเทศที่มีประสิทธิภาพ
						</p>
					</div>
					<div class="col-lg-4 wow slideInRight">
						<i class="icon icon-lightbulb"></i>
						<h3>Philosophy</h3>
						<p>
							มีจิตสำนึกในการให้บริการ (service mind)<br>
							ยึดถือกฏหุ้นส่วนแห่งความสำเร็จ<br>
							มีจริยธรรมในการทำธุรกิจ
						</p>
					</div>
				</div>
			</div>
		</section>

		<!-- TESIMONIAL -->
		<section id="testimonial" class="light-section">
			<div class="container">
				<div class="row">
					<div class="centered wow fadeIn">
						<img class="img img-circle" src="{!! asset('img/team/phichet.png') !!}" height="160px" width="160px" alt="">
						<blockquote>
							<p class="large">
								รู้จักปรับตัว ครอบครัวเดียวกัน มุ่งมั่นประสาน การงานทุ่มเท <br />
								มีพลังสดใส รู้ในรายละเอียด <br />
								แย้มใจเปิดกว้าง คล่องแคล่วว่องไว ใส่ใจบริการ
							</p>
							<footer class="">CEO, Dr.Picheat Wongsawat</footer>
						</blockquote>
					</div>
				</div>
			</div>
		</section>

		<!-- TEAM -->
		<section id="team" class="parallax dark-section" data-parallax="scroll" data-image-src="{!! asset('img/img-03.jpg') !!}">
			<div class="container">
				<div class="row">
					<h2 class="wow fadeInDown delay-05s">Our Team</h2>
					<span class="border"></span>
					<div class="col-lg-3 centered bottom wow fadeIn">
						<img class="img img-circle" src="{!! asset('img/team/anucha.png') !!}" height="120px" width="120px" alt="">
						<h4>นายอนุชา เจียมสกุลทิพย์</h4>
						<p>ผู้จัดการฝ่ายทรัพยากรมนุษย์</p>
					</div>
					<div class="col-lg-3 centered bottom wow fadeIn">
						<img class="img img-circle" src="{!! asset('img/team/wethinee.png') !!}" height="120px" width="120px" alt="">
						<h4>นางเวธินี จงจิตกลาง</h4>
						<p>ผู้จัดการฝ่ายเงินเดือนและค่าจ้าง</p>
					</div>
					<div class="col-lg-3 centered bottom wow fadeIn">
						<img class="img img-circle" src="{!! asset('img/team/pratuang.png') !!}" height="120px" width="120px" alt="">
						<h4>นายประเทือง ปั้นแจ่ม</h4>
						<p>ผู้จัดการฝ่ายสรรหาและคัดเลือกบุคลากร</p>
					</div>
					<div class="col-lg-3 centered bottom wow fadeIn">
						<img class="img img-circle" src="{!! asset('img/team/chareeporn.png') !!}" height="120px" width="120px" alt="">
						<h4>นางสาวชรีพร เทพมงคล</h4>
						<p>ผู้จัดการฝ่ายแรงงานสัมพันธ์</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 centered wow fadeIn">
						<img class="img img-circle" src="{!! asset('img/team/amonrat.png') !!}" height="120px" width="120px" alt="">
						<h4>นางสาวอมรรัตน์ มาธุระ</h4>
						<p>ผู้จัดการฝ่ายบัญชีและการเงิน</p>
					</div>
					<div class="col-lg-3 centered wow fadeIn">
						<img class="img img-circle" src="{!! asset('img/team/akira.png') !!}" height="120px" width="120px" alt="">
						<h4>นายอคิราภ์ ลำจวง</h4>
						<p>ผู้จัดการฝ่ายทรัพยากรมนุษย์</p>
					</div>
					<div class="col-lg-3 centered wow fadeIn">
						<img class="img img-circle" src="{!! asset('img/team/charnchai.png') !!}" height="120px" width="120px" alt="">
						<h4>นายชาญชัย ดาวงษ์</h4>
						<p>ผู้จัดการฝ่ายความปลอดภัยการทำงาน</p>
					</div>
					<div class="col-lg-3 centered wow fadeIn">
						<img class="img img-circle" src="{!! asset('img/team/jantra.png') !!}" height="120px" width="120px" alt="">
						<h4>นางสาวจันทรา ทองสามสี</h4>
						<p>ผู้จัดการฝ่ายการตลาด</p>
					</div>
				</div>
			</div>
		</section>

		<!-- CAREERS -->
		<section id="careers" class="light-section">
			<div class="container">
				<div class="row">
					<h2 class="wow fadeInDown delay-05s">We Hiring</h2>
					<span class="border"></span>
					<div class="col-lg-8 col-lg-offset-2 centered">
						<p class="large">
							เรามีตำแหน่งงานหลากหลาย เพื่อตอบสนองความต้องการของภาคธุรกิจอุตสาหกรรม ครอบคลุมเขตพื้นที่จังหวัดชลบุรี ระยอง ฉะเชิงเทรา สมุทรปราการ ปราจีนบุรี และกรุงเทพมหานคร
						</p>
					</div>
				</div>
				<div class="container">
					<div class="row"> 
						@foreach($careers as $career)
						<div class="col-md-4 ">
							<div class="grid mask">
								<figure><img class="img-responsive" src="{!! $career->thumbnail() !!}" alt="">
									<figcaption>
										<h5>{!! str_limit($career->title, $limit = 100, $end = '...') !!}</h5>
										<a href="{!! url('careers/'.$career->id) !!}" class="btn-eye">
											<i class="icon icon-magnifying-glass"></i>
										</a>
									</figcaption>
								</figure>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="row centered">
					<a href="{!! url('careers') !!}" class="btn btn-lg">View All</a>
				</div>
			</div>
		</section>

		<!-- Fun Facts -->
		<div id="fun-facts" class="parallax dark-section" data-parallax="scroll" data-image-src="{!! asset('img/img-04.jpg') !!}">
			<div class="container">
				<div class="row">
					<h2 class="wow fadeInDown delay-05s">Fun Facts</h2>
					<span class="border"></span>
					<div class="col-md-3">
						<div class="de_count wow fadeInLeft">
							<i class="icon icon-clock"></i>
							<h3 class="timer" data-to="4337" data-speed="2500">4337</h3>
							<span class="sub-title">Hours of Works</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="de_count wow fadeInLeft">
							<i class="icon icon-trophy"></i>
							<h3 class="timer" data-to="280" data-speed="2500">280</h3>
							<span class="sub-title">Winning Awards</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="de_count wow fadeInRight">
							<i class="icon icon-briefcase"></i>
							<h3 class="timer" data-to="20" data-speed="2500">20</h3>
							<span class="sub-title">Happy Clients</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="de_count wow fadeInRight">
							<i class="icon icon-profile-male"></i>
							<h3 class="timer" data-to="5040" data-speed="2500">5040</h3>
							<span class="sub-title">Happy Employees</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Clients -->
		<section id="client" class="light-section">
			<div class="container">
				<div class="row">
					<h2 class="wow fadeInDown delay-05s">Our Clients</h2>
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
		</section>

		<!-- CONTACT -->
		<section id="contact" class="parallax dark-section" data-parallax="scroll" data-image-src="{!! asset('img/img-05.jpg') !!}">
			<div class="container">
				<div class="row">
					<h2 class="centered wow fadeInDown delay-05s">Contact Us</h2>
					<span class="border"></span>
					<div class="col-md-4 wow fadeInLeft">
						<i class="icon icon-envelope"></i>
						<p>sjta.nabun@gmail.com</p>
					</div>
					<div class="col-md-4 fadeIn">
						<i class="icon icon-map"></i>
						<p>
							230/49 หมู่.11 ต.หนองขาม อ.ศรีราชา<br>
							จ.ชลบุรี 20230
						</p>
					</div>
					<div class="col-md-4 wow fadeInRight">
						<i class="icon icon-mic"></i>
						<p>+(66) 038-119319</p>
					</div>
				</div>
			</div>
		</section>

		@stop