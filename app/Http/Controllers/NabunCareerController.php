<?php namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Staff;

class NabunCareerController extends Controller {

	protected $career;
	protected $staff;

	public function __construct(Career $career, Staff $staff)
	{
		$this->middleware('guest');
		$this->career = $career;
		$this->staff  = $staff;
	}

	public function index()
	{
		$careers = $this->career->latest()->published()->get();

		return view('career.index', compact('careers'));
	}

	public function view($id)
	{
		$career = $this->career->where('id', $id)->first();
		$person_one   = $this->staff->find($career->staff_1);
		$person_two   = $this->staff->find($career->staff_2);
		$person_three = $this->staff->find($career->staff_3);
		$person_four  = $this->staff->find($career->staff_4);
		
		return view('career.view', compact('career', 'person_one', 'person_two', 'person_three', 'person_four'));
	}

}
