@extends('layouts.default')
@section('content')

<div id="blog" name="blog">
	<div class="container">
		<div class="row wow fadeInUp animated">
			<h2>Our Team</h2>
			<div class="col-sm-10 col-sm-offset-1 wow fadeInUp animated">
				<p class="created-date">ทีมของเรา</p>
			</div>
		</div>
	</div>
</div>

<div id="blog-body" class="container">
	<div class="row centered bottom">
		<div class="col-sm-10 col-sm-offset-1 centered wow fadeInDown">
			<img class="img img-circle" src="{!! asset('img/team/phichet.png') !!}" height="160px" width="160px" alt="">
			<h4>Dr.Picheat Wongsawat</h4>
			<p>Chairman</p>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
		</div>
	</div>
	<div class="row centered bottom wow fadeInUp" data-wow-delay="0.1s">
		<div class="col-lg-4 centered">
			<img class="img img-circle" src="{!! asset('img/team/anucha.png') !!}" height="120px" width="120px" alt="">
			<h4>นายอนุชา เจียมสกุลทิพย์</h4>
			<p>ผู้จัดการฝ่ายทรัพยากรมนุษย์</p>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
		</div>
		<div class="col-lg-4 centered">
			<img class="img img-circle" src="{!! asset('img/team/wethinee.png') !!}" height="120px" width="120px" alt="">
			<h4>นางเวธินี จงจิตกลาง</h4>
			<p>ผู้จัดการฝ่ายเงินเดือนและค่าจ้าง</p>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
		</div>
		<div class="col-lg-4 centered">
			<img class="img img-circle" src="{!! asset('img/team/pratuang.png') !!}" height="120px" width="120px" alt="">
			<h4>นายประเทือง ปั้นแจ่ม</h4>
			<p>ผู้จัดการฝ่ายสรรหาและคัดเลือกบุคลากร</p>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
		</div>
	</div>
	<div class="row centered bottom wow fadeInUp" data-wow-delay="0.2s">
		<div class="col-lg-4 centered">
			<img class="img img-circle" src="{!! asset('img/team/chareeporn.png') !!}" height="120px" width="120px" alt="">
			<h4>นางสาวชรีพร เทพมงคล</h4>
			<p>ผู้จัดการฝ่ายแรงงานสัมพันธ์</p>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
		</div>
		<div class="col-lg-4 centered">
			<img class="img img-circle" src="{!! asset('img/team/amonrat.png') !!}" height="120px" width="120px" alt="">
			<h4>นางสาวอมรรัตน์ มาธุระ</h4>
			<p>ผู้จัดการฝ่ายบัญชีและการเงิน</p>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
		</div>
		<div class="col-lg-4 centered">
			<img class="img img-circle" src="{!! asset('img/team/akira.png') !!}" height="120px" width="120px" alt="">
			<h4>นายอคิราภ์ ลำจวง</h4>
			<p>ผู้จัดการฝ่ายทรัพยากรมนุษย์</p>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
		</div>
	</div>
	<div class="row centered bottom wow fadeInUp" data-wow-delay="0.3s">
		<div class="col-lg-4 centered">
			<img class="img img-circle" src="{!! asset('img/team/charnchai.png') !!}" height="120px" width="120px" alt="">
			<h4>นายชาญชัย ดาวงษ์</h4>
			<p>ผู้จัดการฝ่ายความปลอดภัยการทำงาน</p>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
		</div>
		<div class="col-lg-4 centered">
			<img class="img img-circle" src="{!! asset('img/team/jantra.png') !!}" height="120px" width="120px" alt="">
			<h4>นางสาวจันทรา ทองสามสี</h4>
			<p>ผู้จัดการฝ่ายการตลาด</p>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
		</div>
	</div>
</div>

@stop