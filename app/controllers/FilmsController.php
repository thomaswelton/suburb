<?php

class FilmsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('films.index', array(
        	'films' => Film::all()
        ));
	}

}
