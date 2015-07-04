<?php namespace App\Http\Controllers;

use App\Models\Career;

class NabunCareerController extends Controller {

	protected $career;

	public function __construct(Career $career)
	{
		$this->middleware('guest');
		$this->career = $career;
	}

	public function index()
	{
		$careers = $this->career->latest()->published()->get();

		return view('career.index', compact('careers'));
	}

	public function view($id)
	{
		$career = $this->career->where('id', $id)->first();

		return view('career.view', compact('career'));
	}

}
