<?php

class GenresTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('genres')->truncate();

		$genres = array(
			array('name' => 'Action'),
			array('name' => 'Drama'),
			array('name' => 'Romance'),
		);

		// Uncomment the below to run the seeder
		DB::table('genres')->insert($genres);
	}

}
