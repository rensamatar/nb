<?php namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\CareerStaff;
use App\Models\Wage;

class NabunCareerController extends Controller {

	protected $career;
	protected $staff;
	protected $wage;

	public function __construct(Career $career, CareerStaff $staff, Wage $wage)
	{
		$this->middleware('guest');
		$this->career = $career;
		$this->staff  = $staff;
		$this->wage   = $wage;
	}

	public function index()
	{
		$careers = $this->career->orderBy('id', 'ASC')->published()->get();

		return view('career.index', compact('careers'));
	}

	public function view($id)
	{
		$career = $this->career->where('id', $id)->first();
		$wages  = $this->wage->where('career_id', $id)->get();
		$staffs = $this->staff->where('career_id', $id)->get();

		// click count
		$career->addClick();
		
		return view('career.view', compact('career', 'staffs', 'wages'));
	}

}
