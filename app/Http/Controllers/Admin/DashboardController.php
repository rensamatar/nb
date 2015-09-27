<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Career;
use App\Models\Staff;
use App\Models\User;

class DashboardController extends Controller {

	protected $activity;
	protected $career;
	protected $staff;

	public function __construct(Activity $activity, Career $career, Staff $staff)
	{  
		$this->activity = $activity;
		$this->career   = $career;
		$this->staff    = $staff;
	}

	public function index()
	{
		$activities = $this->activity->published()->get();
		$careers = $this->career->published()->get();
		$staff = $this->staff->get();

		return view('admin.index', compact('activities', 'careers', 'staff'));
	}

}
