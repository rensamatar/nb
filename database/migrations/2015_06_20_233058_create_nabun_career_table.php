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
		Schema::create('career', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('title');
			$table->string('banner')->nullable();
			$table->string('author')->nullable();
			$table->text('attribute')->nullable();
			$table->string('gender')->nullable();
			$table->string('age')->nullable();
			$table->string('qualifications')->nullable();
			$table->string('wage_1')->nullable();
			$table->string('wage_2')->nullable();
			$table->string('wage_3')->nullable();
			$table->string('wage_4')->nullable();
			$table->string('wage_5')->nullable();
			$table->string('wage_6')->nullable();
			$table->string('wage_7')->nullable();
			$table->string('wage_8')->nullable();
			$table->string('wage_9')->nullable();
			$table->string('wage_10')->nullable();
			$table->string('wage_11')->nullable();
			$table->string('wage_12')->nullable();
			$table->string('wage_13')->nullable();
			$table->string('wage_14')->nullable();
			$table->string('wage_15')->nullable();
			$table->string('wage_16')->nullable();
			$table->string('staff_1')->nullable();
			$table->string('staff_2')->nullable();
			$table->string('staff_3')->nullable();
			$table->string('staff_4')->nullable();
			$table->timestamp('published_date');
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
		Schema::drop('career');
	}

}
