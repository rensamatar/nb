<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('career_staff', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('career_id')->unsigned();
			$table->integer('staff_id')->unsigned();
			$table->foreign('career_id')->references('id')->on('career')->onDelete('CASCADE')->onUpdate('CASCADE');
			$table->foreign('staff_id')->references('id')->on('staff')->onDelete('CASCADE')->onUpdate('CASCADE');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('career_staff');
	}

}
