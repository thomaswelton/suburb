<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('films', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->integer('duration')->unsigned();
			$table->text('description');
			$table->integer('year')->unsigned();
			$table->integer('director_id')->unsigned();
			$table->integer('genre_id')->unsigned();
			$table->timestamps();

			$table->index('director_id');
			$table->index('genre_id');

			$table->foreign('director_id')->references('id')->on('directors');
			$table->foreign('genre_id')->references('id')->on('genres');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('films');
	}

}
