<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wage', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('career_id')->unsigned();
			$table->text('title');
			$table->foreign('career_id')->references('id')->on('career')->onDelete('CASCADE')->onUpdate('CASCADE');
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
		Schema::drop('wage');
	}

}
