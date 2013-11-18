<?php

class FilmsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('films')->truncate();

		$films = array(
			array('title' => 'The Matrix', 'duration' => 10080, 'year' => 1999, 'director_id' => 1, 'genre_id' => 1, 'description' => 'Description of film 1'),
			array('title' => 'Rainman', 'duration' => 14578, 'year' => 1985, 'director_id' => 2, 'genre_id' => 3, 'description' => 'Description of film 2'),
			array('title' => 'Lord Of The Rings', 'duration' => 999999999, 'year' => 1985, 'director_id' => 3, 'genre_id' => 2, 'description' => 'Description of film 3'),
			array('title' => 'Lord Of The Rings 2', 'duration' => 999999999, 'year' => 2006, 'director_id' => 1, 'genre_id' => 4, 'description' => 'Description of film 4'),
			array('title' => 'Lord Of The Rings 3', 'duration' => 999999999, 'year' => 2006, 'director_id' => 1, 'genre_id' => 2, 'description' => 'Description of film 5'),
			array('title' => 'Lord Of The Rings 4', 'duration' => 999999999, 'year' => 2006, 'director_id' => 1, 'genre_id' => 4, 'description' => 'Description of film 6'),
		);

		// Uncomment the below to run the seeder
		DB::table('films')->insert($films);
	}

}
