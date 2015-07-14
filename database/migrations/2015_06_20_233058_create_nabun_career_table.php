<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNabunCareerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nabun_career', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('title');
			$table->string('banner')->nullable();
			$table->text('body');
			$table->string('author')->nullable();
			$table->timestamp('published_date');
			$table->string('attribute')->nullable();
			$table->string('place')->nullable();
			$table->string('work_kind')->nullable();
			$table->string('day_shift')->nullable();
			$table->string('night_shift')->nullable();
			$table->string('wage')->nullable();
			$table->string('benefits')->nullable();
			$table->string('paid_date')->nullable();
			$table->string('uniform')->nullable();
			$table->string('other')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nabun_career');
	}

}
