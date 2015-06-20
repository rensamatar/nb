@extends('layouts.default')
@section('content')

<ul class="onepage-pagination">
	<li><a data-index="1" href="#1" class="active"><span class="cd-label">Pricing</span></a></li>
	<li><a data-index="2" href="#2" class=""><span class="cd-label">Pricing</span></a></li>
	<li><a data-index="3" href="#3" class=""></a></li>
	<li><a data-index="4" href="#4" class=""></a></li>
</ul>

<div class="onepage-main">
	<section class="item">
		<div class="hero">
			<h2>Nabun Upgrade</h2>
			<p>การบริหารงานทรัพยากรมนุษย์เพื่อเพิ่มผลผลิต</p>
			<a href="#0" class="cd-btn">Download CV</a>
			{{-- <a href="#0" class="cd-btn secondary">Learn More</a> --}}
		</div>
	</section>

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
</div>

@stop
