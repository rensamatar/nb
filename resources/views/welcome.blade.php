@extends('layouts.default')
@section('content')

<ul class="onepage-pagination">
	<li><a data-index="1" href="#1" class="active"></a></li>
	<li><a data-index="2" href="#2" class=""></a></li>
	<li><a data-index="3" href="#3" class=""></a></li>
	<li><a data-index="4" href="#4" class=""></a></li>
	<li><a data-index="5" href="#5" class=""></a></li>
</ul>

<div class="onepage-main">
	{{-- Intro --}}
	<section class="item">
		<div class="hero">
			<h2 class="animated fadeInDown">Nabun Upgrade</h2>
			<p class="animated fadeInUp delay-05s">การบริหารงานทรัพยากรมนุษย์เพื่อเพิ่มผลผลิต</p>
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="#0" class="cd-btn animated fadeInUp delay-05s">Download CV</a>
					<div class="scroll-down animated fadeInDown delay-1s">
						<a href="#intro">
							<span class="mouse"><span></span></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	{{-- Vision --}}
	<section>
		<div class="row hero">
			<div class="col-md-6">
				{{-- some animation --}}
			</div>
			<div class="col-md-6">
				<h2>Vision</h2>
				<p>เป็นองค์กรชั้นนำในการบริการด้าน SUB CONTRACT อันเป็นที่ต้องการของธุรกิจ</p>
			</div>
		</div>
	</section>

	{{-- Mission --}}
	<section>
		<div class="row hero">
			<div class="col-md-6">
				<h2>Mission</h2>
				<p>มีการบริหารองค์กรที่ดีมีประสิทธิภาพ</p>
				<p>มีบุคลากรที่มีความรู้และทักษะสูง</p>
				<p>มีระบบสารสนเทศที่มีประสิทธิภาพ</p>
			</div>
			<div class="col-md-6">
				{{-- some animation --}}
			</div>
		</div>
	</section>

	{{-- Philosophy --}}
	<section>
		<div class="row hero">
			<div class="col-md-6">
				{{-- some animation --}}
			</div>
			<div class="col-md-6">
				<h2>Philosophy</h2>
				<p>มีจิตสำนึกในการให้บริการ (service mind)</p>
				<p>ยึดถือกฏหุ้นส่วนแห่งความสำเร็จ</p>
				<p>มีจริยธรรมในการทำธุรกิจ</p>
			</div>
		</div>
	</section>

	{{-- Clients --}}
	<section>
		<div class="row client">
			<div class="col-md-12">
				<h2 class="client-title">Our Clients</h2>
				<div class="client-wrap">
					<ul>
						<li><img src="{{ asset('img/clients/fujitsu.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/gm.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/emerson.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/cerebos.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/samsung.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/slab.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/srab.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/tokai.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/sji.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/takahata.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/tft.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/amaka.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/sumitomo.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/teknia.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/wellpack.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/yamahatsu.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/titan.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/dhl.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/brand.png') }}" class="res-img" alt=""></li>
						<li><img src="{{ asset('img/clients/kobelco.png') }}" class="res-img" alt=""></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	{{-- slogan --}}
	<section>
		<div class="row hero">
			<div class="col-md-12">
				<h2>Slogan</h2>
				<p>รู้จักปรับตัว ครอบครัวเดียวกัน มุ่งมั่นประสาน การงานทุ่มเท มีพลังสดใส รู้ในรายละเอียด แย้มใจเปิดกว้าง คล่องแคล่วว่องไว ใส่ใจบริการ</p>
			</div>
		</div>
	</section>
</div>

@stop

@section('script')
<script src="{{ asset('js/vendor/onepage-scroll.js') }}"></script>
<script>
	(function ($) {
		'use strict';
		$.fn.heightFull = function() {
			var totalHeight = $('window').height();
			var heightMinus = totalHeight;
			$(this).css('height', heightMinus);
		};
	}(jQuery));
	
	$(window).resize(function() {
		$('.onepage-main .item').heightFull();
	});

	$('.onepage-main').onepage_scroll({
		sectionContainer: 'section',
		easing: 'cubic-bezier(0.175, 0.885, 0.420, 1.210)',
		animationTime: 1000,
		pagination: true,
		updateURL: false,
		beforeMove: function(index) {},
		afterMove: function(index) {},
		loop: false,  
		responsiveFallback: 600
	});
</script>
@stop
