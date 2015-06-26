@extends('layouts.default')
@section('content')

<section id="testimonials">
	<div class="container">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 white-font-color wow fadeInUp animated">
						<h4 class="white-font-color text-center">
							รู้จักปรับตัว ครอบครัวเดียวกัน มุ่งมั่นประสาน การงานทุ่มเท มีพลังสดใส รู้ในรายละเอียด แย้มใจเปิดกว้าง คล่องแคล่วว่องไว ใส่ใจบริการ
						</h4>
					</div>
					<div class="col-sm-10 col-sm-offset-1 white-font-color  text-center wow fadeInUp animated">
						<div class="client-say">"Phichet Wongsawat"</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<div class="container normal">
	<div class="row about">
		<div class="col-md-6">
			<h2 class="heading">About The Nabun</h2>
			<div class="row">
				<div class="col-sm-8 text-center"> 
					<div class="row team-member text-center">
						<div class="col-sm-8 col-md-offset-5">
							<a href="#">
								<img src="{!! asset('img/team/phichet.png') !!}" alt="" class="img-responsive">
							</a>
						</div>	
						<div class="col-sm-12 col-md-offset-3 team-name"><h4>ดร.พิเชต วงศ์สวัสดิ์</h4></div>	
						<div class="col-sm-12 col-md-offset-3">ประธานบริษัท</div>	
					</div>	
				</div>
			</div>
			<h4 class="subheading">
				We are always happy to make valuable new contacts and are looking forward to receiving your mail or call. Even if you’re not sure we’ll be the right ones for your project. We’re always open to a chat and will be happy to help – of course also in person, wherever you are.
			</h4>
		</div>
		<div class="col-md-6">
			<h2 class="heading text-right">History</h2>
			<table class="table table-striped">
				<tbody>
					<tr>
						<td style="width: 42%;">7 พฤศจิกายน 2545</td>
						<td>ก่อตั้งห้างหุ้นส่วนจำกัด นาบุญคอนซัลท์ อินเตอร์เนชันแนล</td>
					</tr>
					<tr>
						<td>โดยมี ดร.พิเชต วงศ์สวัสดิ์</td>
						<td>ถือหุ้น 500,000 บาท</td>
					</tr>
					<tr>
						<td>นางสาว สายฝน จันทะแสง</td>
						<td>ถือหุ้น 500,000 บาท</td>
					</tr>
					<tr>
						<td>23 กันยายน 2547</td>
						<td>ก่อตั้งเป็นบริษัท นาบุญ อัพเกรด อินเตอร์เนชันแนล จำกัด</td>
					</tr>
					<tr>
						<td>ทุนจดทะเบียน</td>
						<td>1,000,000 บาท</td>
					</tr>
					<tr>
						<td>เงินทุนหมุนเวียน</td>
						<td>100,000,000 บาท</td>
					</tr>
					<tr>
						<td>ประธานบริษัท</td>
						<td>ดร.พิเชต วงศ์สวัสดิ์</td>
					</tr>
					<tr>
						<td>กรรมการผู้จัดการ</td>
						<td>นางสาวสายฝน จันทะแสง</td>
					</tr>
					<tr>
						<td>สำนักงานเลขที่</td>
						<td>230/49 หมู่ 11 ต.หนองขาม อ.ศรีราชา จ.ชลบุรี 20230</td>
					</tr>
					<tr>
						<td>ประกอบธุรกิจ</td>
						<td>บริการรับจ้างเหมาแรงงาน และที่ปรึกษางานบริหารทรัพยากรมนุษย์</td>
					</tr>
					<tr>
						<td>จำนวนพนักงาน</td>
						<td>5,000 คน</td>
					</tr>
					<tr>
						<td>เจ้าหน้าที่สำนักงาน</td>
						<td>40 คน</td>
					</tr>
					<tr>
						<td>ลูกค้าที่ให้บริการ</td>
						<td>20 บริษัท</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
{{-- Team --}}
<section class="main-color white-font-color small-full-section">
	<div class="container normal">
		<div class="row">
			<h2 class="heading white-text">Our Team</h2>
			<div class="row">
				<div class="col-sm-3"> 
					<div class="row team-member text-center">
						<div class="col-sm-8 col-md-offset-2">
							<a href="#">
								<img src="{!! asset('img/team/anucha.png') !!}" alt="" class="img-responsive">
							</a>
						</div>	
						<div class="col-sm-12 team-name">นายอนุชา เจียมสกุลทิพย์</div>	
						<div class="col-sm-12">ผู้จัดการฝ่ายทรัพยากรมนุษย์</div>	
					</div>	
				</div>
				<div class="col-sm-3"> 
					<div class="row team-member text-center">
						<div class="col-sm-8 col-md-offset-2">
							<a href="#">
								<img src="{!! asset('img/team/wethinee.png') !!}" alt="" class="img-responsive">
							</a>
						</div>	
						<div class="col-sm-12 team-name">นางเวธินี จงจิตกลาง</div>	
						<div class="col-sm-12">ผู้จัดการฝ่ายเงินเดือนและค่าจ้าง</div>	
					</div>	
				</div>
				<div class="col-sm-3"> 
					<div class="row team-member text-center">
						<div class="col-sm-8 col-md-offset-2">
							<a href="#">
								<img src="{!! asset('img/team/pratuang.png') !!}" alt="" class="img-responsive">
							</a>
						</div>	
						<div class="col-sm-12 team-name">นายประเทือง ปั้นแจ่ม</div>	
						<div class="col-sm-12">ผู้จัดการฝ่ายสรรหาและคัดเลือกบุคลากร</div>	
					</div>	
				</div>
				<div class="col-sm-3"> 
					<div class="row team-member text-center">
						<div class="col-sm-8 col-md-offset-2">
							<a href="#">
								<img src="{!! asset('img/team/chareeporn.png') !!}" alt="" class="img-responsive">
							</a>
						</div>	
						<div class="col-sm-12 team-name">นางสาวชรีพร เทพมงคล</div>	
						<div class="col-sm-12">ผู้จัดการฝ่ายแรงงานสัมพันธ์</div>	
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3"> 
					<div class="row team-member text-center">
						<div class="col-sm-8 col-md-offset-2">
							<a href="#">
								<img src="{!! asset('img/team/amonrat.png') !!}" alt="" class="img-responsive">
							</a>
						</div>	
						<div class="col-sm-12 team-name">นางสาวอมรรัตน์ มาธุระ</div>	
						<div class="col-sm-12">ผู้จัดการฝ่ายบัญชีและการเงิน</div>	
					</div>	
				</div>
				<div class="col-sm-3"> 
					<div class="row team-member text-center">
						<div class="col-sm-8 col-md-offset-2">
							<a href="#">
								<img src="{!! asset('img/team/akira.png') !!}" alt="" class="img-responsive">
							</a>
						</div>	
						<div class="col-sm-12 team-name">นายอคิราภ์ ลำจวง</div>	
						<div class="col-sm-12">ผู้จัดการฝ่ายทรัพยากรมนุษย์</div>	
					</div>	
				</div>
				<div class="col-sm-3"> 
					<div class="row team-member text-center">
						<div class="col-sm-8 col-md-offset-2">
							<a href="#">
								<img src="{!! asset('img/team/charnchai.png') !!}" alt="" class="img-responsive">
							</a>
						</div>	
						<div class="col-sm-12 team-name">นายชาญชัย ดาวงษ์</div>	
						<div class="col-sm-12">ผู้จัดการฝ่ายความปลอดภัยในการทำงาน</div>	
					</div>	
				</div>
				<div class="col-sm-3"> 
					<div class="row team-member text-center">
						<div class="col-sm-8 col-md-offset-2">
							<a href="#">
								<img src="{!! asset('img/team/jantra.png') !!}" alt="" class="img-responsive">
							</a>
						</div>	
						<div class="col-sm-12 team-name">นางสาวจันทรา ทองสามสี</div>	
						<div class="col-sm-12">ผู้จัดการฝ่ายการตลาด</div>	
					</div>	
				</div>
			</div>	
		</div>	
	</section>

@include('layouts.footer')
	@stop