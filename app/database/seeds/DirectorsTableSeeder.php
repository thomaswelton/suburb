<?php

class DirectorsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('directors')->truncate();

		$directors = array(
			array('name' => 'Steven Spielberg'),
			array('name' => 'Martin Scorsese'),
			array('name' => 'Quentin Tarantino'),
			array('name' => 'Alfred Hitchcock'),
		);

		// Uncomment the below to run the seeder
		DB::table('directors')->insert($directors);
	}

}
