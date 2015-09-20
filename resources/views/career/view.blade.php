@extends('layouts.default')
@section('content')

<div id="blog" name="blog">
	<div class="container">
		<div class="row white-font-color centered wow fadeInUp animated">
			<h2>{!! $career->title !!}</h2>
			<div class="col-sm-10 col-sm-offset-1 white-font-color centered wow fadeInUp animated">
				<p class="created-date">{!! $career->created_at->diffForHumans() !!}</p>
			</div>
		</div>
	</div>
</div>

<div id="blog-body" class="container">
	<div class="row bottom">
		<div class="col-md-4">
			<h3><strong><i class="fa fa-database"></i> รายละเอียด</strong></h3>
			<p><strong><i class="fa fa-gear"></i>ที่ทำงาน</strong></p>
			<p>บริษัท ฟูจิตสึฯ - แหลมฉบัง(โรง1)</p>
			<p><strong><i class="fa fa-gavel"></i>ผลิต</strong></p>
			<p>ผลิตเครื่องปรับอากาศ</p>
			<p><strong><i class="fa fa-venus-mars"></i>เพศ</strong></p>
			<p>ชาย / หญิง</p>
			<p><strong><i class="fa fa-life-bouy"></i>อายุ</strong></p>
			<p>18-30 ปี</p>
			<p><strong><i class="fa fa-mortar-board"></i>วุฒิการศึกษา</strong></p>
			<p>ม.3 ขึ้นไป</p>
		</div>
		<div class="col-md-5">
			<h3><strong><i class="fa fa-bullhorn"></i> ค่าจ้าง / สวัสดิการ</strong></h3>
			<p>ค่าจ้าง 305 บาท/วัน</p>
			<p>ค่ากะตึก 120 บาท/วัน</p>
			<p>OT. ชั่วโมงละ 57.18 บาท</p>
			<p>OT. 2 แรงคิดเป็น 7.5 ชั่วโมง</p>
			<p>เบี้ยขยัน (รายเดือน) 700-800 บาท</p>
			<p>ค่าอาหาร ทำ OT. 2 ชั่วโมง วันละ 30 บาท</p>
			<p>ค่าครองชีพ 600 บาท/เดือน</p>
			<p>ประกันสังคม / กองทุนเงินทดแทน</p>
			<p>ค่าเช่าบ้าน 500 บาท/เดือน</p>
			<p>มีรถรับส่ง-ฟรี</p>
			<p>เงินเบิกสำรองล่วงหน้า</p>
			<p>อายุงานไม่ครบ 4 ปี จ่ายค่ารักษาพยาบาล 250 บาท/เดือน</p>
			<p>อายุงานครบ 3 ปีขึ้นไป จ่ายค่ารักษาพยาบาล 416 บาท/เดือน</p>
			<p>ทำงานครบ 1 ปีมีประกันชีวิต/ประกันอุบัติเหตุ</p>
			<p>จ่ายค่าจ้างทุกวันที่ 16 และวันที่ 1 ของเดือน</p>
			<p>ค่าฌาปนกิจศพ 5,000 บาท</p>
		</div>
		<div class="col-md-3">
			<h3><strong><i class="fa fa-phone"></i> ติดต่อ</strong></h3>
			<div class="">
				<p><strong>พี่ยุพิน</strong></p>
				<p>086-3932296</p>
			</div>
			<div class="">
				<p><strong>พี่โอม</strong></p>
				<p>086-3080943</p>
			</div>
			<div class="">
				<p><strong>พี่เติ้ล</strong></p>
				<p>086-3080941</p>
			</div>
			<div class="">
				<p><strong>พี่เติ้ล</strong></p>
				<p>086-3080941</p>
			</div>
		</div>
	</div>
</div>

@stop