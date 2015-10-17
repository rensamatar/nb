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
			$table->integer('wage_id');
			$table->integer('staff_id');
			$table->string('title');
			$table->string('banner')->nullable();
			$table->string('author')->nullable();
			$table->text('attribute')->nullable();
			$table->string('gender')->nullable();
			$table->string('age')->nullable();
			$table->string('qualifications')->nullable();
			$table->timestamp('published_date');
			$table->integer('click')->default(0);
			$table->float('rating_cache')->default(0);
			$table->integer('rating_count')->default(0);
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
		Schema::drop('career');
	}

}
