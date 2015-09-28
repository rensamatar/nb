<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StaffTableSeeder extends Seeder {

	public function run()
	{
		DB::table('staff')->truncate();

		$staff = [
		[
		'name'       => 'John Doe',
		'nickname'   => 'John',
		'position'   => 'Lorem ipsum dolor sit amet',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'John Doe',
		'nickname'   => 'John',
		'position'   => 'Lorem ipsum dolor sit amet',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'John Doe',
		'nickname'   => 'John',
		'position'   => 'Lorem ipsum dolor sit amet',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'John Doe',
		'nickname'   => 'John',
		'position'   => 'Lorem ipsum dolor sit amet',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'John Doe',
		'nickname'   => 'John',
		'position'   => 'Lorem ipsum dolor sit amet',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'John Doe',
		'nickname'   => 'John',
		'position'   => 'Lorem ipsum dolor sit amet',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'John Doe',
		'nickname'   => 'John',
		'position'   => 'Lorem ipsum dolor sit amet',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		[
		'name'       => 'John Doe',
		'nickname'   => 'John',
		'position'   => 'Lorem ipsum dolor sit amet',
		'phone'      => '000-0000000',
		'image'      => '',
		'created_at' => Carbon\Carbon::now()->subWeek(),
		'updated_at' => Carbon\Carbon::now()->subWeek(),
		],
		];

		DB::table('staff')->insert($staff);
	}
}