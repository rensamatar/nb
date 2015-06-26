<?php namespace App\Http\Controllers;

class ContactUsController extends Controller {

	public function __construct()
	{
		$this->middleware('guest');
	}

	public function index()
	{
		return view('pages.contact-us', compact('activities'));
	}

}
