<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ActivityTableSeeder extends Seeder {

	public function run()
	{
		DB::table('activity')->truncate();

		$activity = [
		[
		'title'          => 'This is the anoucement from the Server',
		'banner'         => '',
		'body'           => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
		'author'         => 'Sarawut Popadcha',
		'published_date' => Carbon\Carbon::now(),
		'img_file_01'	 => '',
		'img_file_02'	 => '',
		'img_file_03'	 => '',
		'img_file_04'	 => '',
		'img_file_05'	 => '',
		'img_file_06'	 => '',
		'img_file_07'	 => '',
		'img_file_08'	 => '',
		'created_at'     => Carbon\Carbon::now()->subWeek(),
		'updated_at'     => Carbon\Carbon::now()->subWeek(),
		],
		[
		'title'          => 'This is the anoucement from the Server',
		'banner'         => '',
		'body'           => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
		'author'         => 'Sarawut Popadcha',
		'published_date' => Carbon\Carbon::now(),
		'img_file_01'	 => '',
		'img_file_02'	 => '',
		'img_file_03'	 => '',
		'img_file_04'	 => '',
		'img_file_05'	 => '',
		'img_file_06'	 => '',
		'img_file_07'	 => '',
		'img_file_08'	 => '',
		'created_at'     => Carbon\Carbon::now()->subWeek(),
		'updated_at'     => Carbon\Carbon::now()->subWeek(),
		],
		[
		'title'          => 'This is the anoucement from the Server',
		'banner'         => '',
		'body'           => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
		'author'         => 'Sarawut Popadcha',
		'published_date' => Carbon\Carbon::now(),
		'img_file_01'	 => '',
		'img_file_02'	 => '',
		'img_file_03'	 => '',
		'img_file_04'	 => '',
		'img_file_05'	 => '',
		'img_file_06'	 => '',
		'img_file_07'	 => '',
		'img_file_08'	 => '',
		'created_at'     => Carbon\Carbon::now()->subWeek(),
		'updated_at'     => Carbon\Carbon::now()->subWeek(),
		],
		[
		'title'          => 'This is the anoucement from the Server',
		'banner'         => '',
		'body'           => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
		'author'         => 'Sarawut Popadcha',
		'published_date' => Carbon\Carbon::now(),
		'img_file_01'	 => '',
		'img_file_02'	 => '',
		'img_file_03'	 => '',
		'img_file_04'	 => '',
		'img_file_05'	 => '',
		'img_file_06'	 => '',
		'img_file_07'	 => '',
		'img_file_08'	 => '',
		'created_at'     => Carbon\Carbon::now()->subWeek(),
		'updated_at'     => Carbon\Carbon::now()->subWeek(),
		],
		[
		'title'          => 'This is the anoucement from the Server',
		'banner'         => '',
		'body'           => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
		'author'         => 'Sarawut Popadcha',
		'published_date' => Carbon\Carbon::now(),
		'img_file_01'	 => '',
		'img_file_02'	 => '',
		'img_file_03'	 => '',
		'img_file_04'	 => '',
		'img_file_05'	 => '',
		'img_file_06'	 => '',
		'img_file_07'	 => '',
		'img_file_08'	 => '',
		'created_at'     => Carbon\Carbon::now()->subWeek(),
		'updated_at'     => Carbon\Carbon::now()->subWeek(),
		],
		[
		'title'          => 'This is the anoucement from the Server',
		'banner'         => '',
		'body'           => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
		'author'         => 'Sarawut Popadcha',
		'published_date' => Carbon\Carbon::now(),
		'img_file_01'	 => '',
		'img_file_02'	 => '',
		'img_file_03'	 => '',
		'img_file_04'	 => '',
		'img_file_05'	 => '',
		'img_file_06'	 => '',
		'img_file_07'	 => '',
		'img_file_08'	 => '',
		'created_at'     => Carbon\Carbon::now()->subWeek(),
		'updated_at'     => Carbon\Carbon::now()->subWeek(),
		],
		];

		DB::table('activity')->insert($activity);
	}
}