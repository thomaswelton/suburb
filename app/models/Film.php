<?php

class Film extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function genre(){
		return $this->belongsTo('Genre');
	}

	public function actors(){
		return $this->belongsToMany('Actor', 'film_actors');
	}

	public function director(){
		return $this->belongsTo('Director');
	}
}
