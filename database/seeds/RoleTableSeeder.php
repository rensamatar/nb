<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RoleTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('roles')->truncate();

		$roles = [
		[
		'id'           => 1,
		'name'         => 'admin',
		'display_name' => 'Admin',
		'created_at'   => Carbon\Carbon::now()->subWeek(),
		'updated_at'   => Carbon\Carbon::now()->subWeek(),
		],
		[
		'id'           => 2,
		'name'         => 'staff',
		'display_name' => 'Staff',
		'created_at'   => Carbon\Carbon::now()->subWeek(),
		'updated_at'   => Carbon\Carbon::now()->subWeek(),
		],
		[
		'id'           => 3,
		'name'         => 'member',
		'display_name' => 'Member',
		'created_at'   => Carbon\Carbon::now()->subWeek(),
		'updated_at'   => Carbon\Carbon::now()->subWeek(),
		],
		];

		DB::table('roles')->insert($roles);
	}

}