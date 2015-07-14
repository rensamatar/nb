@extends('layouts.default')
@section('content')

<section class="activity-hero" style="background-image: url('{!! $career->thumbnail() !!}'); background-size: cover; background-position: 50% 50%;">
	<div class="container">
		<div class="row white-font-color text-center  wow fadeInUp animated">
			<h2>{!! $career->title !!}</h2>
			<div class="col-sm-10 col-sm-offset-1 white-font-color  text-center wow fadeInUp animated">
				<p class="created-date">{!! $career->created_at->diffForHumans() !!}</p>
			</div>
		</div>
	</div>
</section>

<div class="container normal">
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-3">
					<div class="text-muted">
						ที่พัก
					</div>

				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-6">

							<div>ประเภทเตียง: <strong>เตียงจริง</strong></div>

							<div>ประเภทที่พัก <strong><a href="/s/%E0%B9%80%E0%B8%8A%E0%B8%B5%E0%B8%A2%E0%B8%87%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88--%E0%B9%84%E0%B8%97%E0%B8%A2?type=apartment" class="link-reset">อพาร์ทเมนท์</a></strong></div>

							<div>จำนวนผู้เข้าพักได้: <strong>2</strong></div>

							<div>ห้องนอน: <strong>1</strong></div>
						</div>
						<div class="col-md-6">

							<div>ห้องน้ำ: <strong>1</strong></div>

							<div>เตียง: <strong>1</strong></div>

							<div>เช็คอิน <strong>14:00</strong></div>

							<div>เช็คเอาท์ <strong>11:00</strong></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>

@include('layouts.address')
@include('layouts.footer')

@stop