<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNabunActivityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('title');
			$table->string('banner')->nullable();
			$table->text('body');
			$table->string('author')->nullable();
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
		Schema::drop('activity');
	}

}
