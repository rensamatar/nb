<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityPhotoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_photos', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('activity_id')->unsigned();
			$table->string('photo')->nullable();
			$table->string('description');
			$table->foreign('activity_id')->references('id')->on('activity')->onDelete('CASCADE')->onUpdate('CASCADE');
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
		Schema::drop('activity_photos');
	}

}
