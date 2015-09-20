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
			$table->string('wage-1')->nullable();
			$table->string('wage-2')->nullable();
			$table->string('wage-3')->nullable();
			$table->string('wage-4')->nullable();
			$table->string('wage-5')->nullable();
			$table->string('wage-6')->nullable();
			$table->string('wage-7')->nullable();
			$table->string('wage-8')->nullable();
			$table->string('wage-9')->nullable();
			$table->string('wage-10')->nullable();
			$table->string('wage-11')->nullable();
			$table->string('wage-12')->nullable();
			$table->string('wage-13')->nullable();
			$table->string('wage-14')->nullable();
			$table->string('wage-15')->nullable();
			$table->string('wage-16')->nullable();
			$table->string('wage-17')->nullable();
			$table->string('person_id')->nullable();
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
