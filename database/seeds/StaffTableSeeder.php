<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StaffTableSeeder extends Seeder {

	public function run()
	{
		DB::table('staff')->truncate();

		$staff = [
		[
		'name'       => 'ดร.พิเชต วงศ์สวัสดิ์',
		'nickname'   => 'คุณตู่',
		'position'   => 'ประธานบริษัท',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'นายอนุชา เจียมสกุลทิพย์',
		'nickname'   => 'อนุชา',
		'position'   => 'ผู้จัดการฝ่ายทรัพยากรมนุษย์',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'นางเวธินี จงจิตกลาง',
		'nickname'   => 'เวธินี',
		'position'   => 'ผู้จัดการฝ่ายเงินเดือนและค่าจ้าง',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'นายประเทือง ปั้นแจ่ม',
		'nickname'   => 'พี่เติ้ล',
		'position'   => 'ผู้จัดการฝ่ายสรรหาและคัดเลือกบุคลากร',
		'phone'      => '086-3080941',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'นางสาวชรีพร เทพมงคล',
		'nickname'   => 'ชรีพร',
		'position'   => 'ผู้จัดการฝ่ายแรงงานสัมพันธ์',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'นางสาวอมรรัตน์ มาธุระ',
		'nickname'   => 'พี่หวาน',
		'position'   => 'ผู้จัดการฝ่ายบัญชีและการเงิน',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'นายอคิราภ์ ลำจวง',
		'nickname'   => 'พี่ต้าร์',
		'position'   => 'ผู้จัดการฝ่ายทรัพยากรมนุษย์',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'นายชาญชัย ดาวงษ์',
		'nickname'   => 'ชาญชัย',
		'position'   => 'ผู้จัดการฝ่ายความปลอดภัยการทำงาน',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'นางสาวจันทรา ทองสามสี',
		'nickname'   => 'จันทรา',
		'position'   => 'ผู้จัดการฝ่ายการตลาด',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'นางยุพิน ดอนหมื่น',
		'nickname'   => 'พี่ยุพิน',
		'position'   => 'Staff',
		'phone'      => '086-3932296',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'คุณโฮม',
		'nickname'   => 'พี่โฮม',
		'position'   => 'Staff',
		'phone'      => '086-3080943',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'คุณไก่',
		'nickname'   => 'พี่ไก่',
		'position'   => 'Staff',
		'phone'      => '086-3427035',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'คุณไหม',
		'nickname'   => 'พี่ไหม',
		'position'   => 'Staff',
		'phone'      => '085-2919417',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'คุณกิ๊ก',
		'nickname'   => 'พี่กิ๊ก',
		'position'   => 'Staff',
		'phone'      => '082-7541889',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		]
		];

		DB::table('staff')->insert($staff);
	}
}