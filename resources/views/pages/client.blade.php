@extends('layouts.default')
@section('content')

<div id="blog" name="blog" data-parallax="scroll" data-image-src="{!! asset('img/bg-subheader.jpg') !!}">
	<div class="container">
		<div class="row wow fadeInUp delay-1s">
			<h2>Our Client</h2>
			<div class="col-sm-10 col-sm-offset-1 wow fadeInUp delay-15s">
				<p class="created-date">ลูกค้าที่ให้บริการ</p>
			</div>
		</div>
	</div>
</div>

<div id="blog-body" class="container">
	<div class="row">
		<div class="col-md-4 centered wow fadeInUp">
			<img src="{{ asset('img/logo/fujitsu.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Fujitsu General (Thailand)</h4>
				<small>บริษัท ฟูจิตสึ เจเนอรัล (ประเทศไทย) จำกัด</small>
			</hgroup>
		</div>
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="0.1s">
			<img src="{{ asset('img/logo/gm.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>General Motors (Thailand)</h4>
				<small>บริษัท เจนเนอรัล มอเตอร์ส (ประเทศไทย) จำกัด</small>
			</hgroup>
		</div>
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="0.2s">
			<img src="{{ asset('img/logo/emerson.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Emerson Electric (Thailand)</h4>
				<small>บริษัท อิเมอร์สัน อิเล็คทริค (ประเทศไทย) จำกัด</small>
			</hgroup>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="0.3s">
			<img src="{{ asset('img/logo/cerebos.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Cerebos (Thailand)</h4>
				<small>บริษัท เซเรบอส (ประเทศไทย) จำกัด</small>
			</hgroup>
		</div>
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="0.4s">
			<img src="{{ asset('img/logo/samsung.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Thai Samsung Electronics</h4>
				<small>บริษัท ไทยซัมซุง อิเลคโทรนิคส์ จำกัด</small>
			</hgroup>
		</div>
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="0.5s">
			<img src="{{ asset('img/logo/slab.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Summit Auto Body Industry</h4>
				<small>บริษัท ซัมมิท แหลมฉบัง โอโต บอดี้ เวิร์ค จำกัด</small>
			</hgroup>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="0.6s">
			<img src="{{ asset('img/logo/srab.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Summit Auto Body Industry</h4>
				<small>บริษัท ซัมมิท แหลมฉบัง โอโต บอดี้ เวิร์ค จำกัด</small>
			</hgroup>
		</div>
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="0.7s">
			<img src="{{ asset('img/logo/tokai.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Tokai Rika (Thailand)</h4>
				<small>บริษัท โตไค ริคะ (ไทยแลนด์) จำกัด</small>
			</hgroup>
		</div>
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="0.8s">
			<img src="{{ asset('img/logo/sji.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>S&amp;J International Enterprise</h4>
				<small>บริษัท เอสแอนด์เจอินเตอร์เนชั่นแนลเอ็นเตอร์ไพรส์ จำกัด</small>
			</hgroup>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="0.9s">
			<img src="{{ asset('img/logo/takahata.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Takahata Presision (Thailand) </h4>
				<small>บริษัท ทาคาฮาตะ พรีซิชั่น (ไทยแลนด์) จำกัด</small>
			</hgroup>
		</div>
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="1s">
			<img src="{{ asset('img/logo/tft.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Techno Fab (Thailand) </h4>
				<small>บริษัท เทคโนแฟบ (ประเทศไทย) จำกัด</small>
			</hgroup>
		</div>
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="1.1s">
			<img src="{{ asset('img/logo/amaka.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Amaga Saki Pipe (Thailand) </h4>
				<small>บริษัท อมากา ซากิ ไปพพ (ประเทศไทย) จำกัด</small>
			</hgroup>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="1.2s">
			<img src="{{ asset('img/logo/sumitomo.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Sumitomo Electric (Thailand) </h4>
				<small>บริษัท ซูมิโตโม อีเล็คตริก ไวริ่ง ซิสเต็มส์ (ประเทศไทย) จำกัด</small>
			</hgroup>
		</div>
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="1.3s">
			<img src="{{ asset('img/logo/teknia.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Teknia (Thailand) </h4>
				<small>บริษัท เทคเนีย จำกัด</small>
			</hgroup>
		</div>
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="1.4s">
			<img src="{{ asset('img/logo/wellpack.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Wellpack Innovation (Thailand) </h4>
				<small>บริษัท เวลแพค อินโนเวชั่น จำกัด</small>
			</hgroup>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="1.5s">
			<img src="{{ asset('img/logo/yamahatsu.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Yamahatsu (Thailand) </h4>
				<small>บริษัท ยามาฮัทสึ (ประเทศไทย) จำกัด</small>
			</hgroup>
		</div>
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="1.6s">
			<img src="{{ asset('img/logo/titan.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Titan VNS Auto Logistic</h4>
				<small>บริษัท ไททั่น วีเอ็นเอส ออโต้ โลจิสติกส์ จำกัด</small>
			</hgroup>
		</div>
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="1.7s">
			<img src="{{ asset('img/logo/dhl.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>DHL Subply Chain (Thailand)</h4>
				<small>บริษัท ดีเอชแอล ซัพพลายเชน (ประเทศไทย) จำกัด</small>
			</hgroup>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="1.8s">
			<img src="{{ asset('img/logo/brand.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Brand (1835)</h4>
				<small>บริษัท แบรนด์ (1835) จำกัด</small>
			</hgroup>
		</div>
		<div class="col-md-4 centered wow fadeInUp" data-wow-delay="1.9s">
			<img src="{{ asset('img/logo/kobelco.png') }}" class="img-animate" alt="client logo">
			<hgroup>
				<h4>Thai Kobelco Construction Machinery</h4>
				<small>บริษัท ไทยโคเบลโก้คอนสตรัคชั่นแมชีนเนอรี่ จำกัด</small>
			</hgroup>
		</div>
	</div>
</div>

@stop