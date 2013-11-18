<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilmActorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('film_actors', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('actor_id')->unsigned();
			$table->integer('film_id')->unsigned();
			$table->timestamps();

			$table->index('actor_id');
			$table->index('film_id');

			$table->foreign('actor_id')->references('id')->on('actors');
			$table->foreign('film_id')->references('id')->on('films');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('film_actors');
	}

}
