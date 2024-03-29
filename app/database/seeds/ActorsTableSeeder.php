<?php

class ActorsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('actors')->truncate();

		$actors = array(
			array('name' => 'Thomas Welton'),
			array('name' => 'Brad Pitt'),
			array('name' => 'Tom Cruise'),
		);

		// Uncomment the below to run the seeder
		DB::table('actors')->insert($actors);

		// Attach actors to films
		
		$film1 = Film::find(1);
		$film2 = Film::find(2);
		$film3 = Film::find(3);
		$film4 = Film::find(4);
		$film5 = Film::find(5);
		$film6 = Film::find(6);

		$film1->actors()->attach(array(1,2));
		$film2->actors()->attach(array(1,3));
		$film3->actors()->attach(array(1,2,3));
		$film4->actors()->attach(array(1,2,3));
		$film5->actors()->attach(array(1,2,3));
		$film6->actors()->attach(array(1,2,3));
	}

}
