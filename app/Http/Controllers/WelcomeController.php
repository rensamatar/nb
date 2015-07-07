<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	public function __construct()
	{
		$this->middleware('guest');
	}

	public function index()
	{
		return view('welcome');
	}

	public function about()
	{
		return view('pages.about');
	}

	public function history()
	{
		return view('pages.history');
	}

	public function client()
	{
		return view('pages.client');
	}
}
