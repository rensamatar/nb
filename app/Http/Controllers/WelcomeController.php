<?php namespace App\Http\Controllers;

use App\Models\Career;

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
	protected $careers;

	public function __construct(Career $careers)
	{
		$this->middleware('guest');
		$this->careers = $careers;
	}

	public function index()
	{
		$careers = $this->careers->latest()->published()->get()->take(3);
		return view('welcome', compact('careers'));
	}

	public function about()
	{
		return view('pages.about');
	}

	public function team()
	{
		return view('pages.team');
	}

	public function client()
	{
		return view('pages.client');
	}

	public function services()
	{
		return view('pages.services');
	}
	
}
