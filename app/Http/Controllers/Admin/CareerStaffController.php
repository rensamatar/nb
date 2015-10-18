<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Staff;
use App\Models\CareerStaff;
use Input;
use Image;
use Auth;

class CareerStaffController extends Controller {

	protected $career;
	protected $staff;
	protected $careerStaff;
	protected $validationRules = array(
		'staff' => 'required'
		);

	public function __construct(Career $career, Staff $staff, CareerStaff $careerStaff)
	{  
		$this->career      = $career;
		$this->staff       = $staff;
		$this->careerStaff = $careerStaff;
	}

	public function getCreate($careerId = null)
	{
		if (is_null($career = $this->career->find($careerId))) 
    	{
    		return redirect('admin/career')->with('error', 'Career not exist.');
    	}

		return view('admin.career.staff.create', compact('career'));
	}

	public function postCreate($careerId, Request $request)
	{
		if (is_null($career = $this->career->find($careerId))) 
    	{
    		return redirect('admin/career')->with('error', 'Career not exist.');
    	}

    	// Validate
		$this->validate($request, $this->validationRules);

		$career_staff = new CareerStaff;
		$career_staff->career_id = $careerId;
		$career_staff->staff_id  = $request->input('staff');
		$career_staff->save();

		return redirect('admin/career/' .$careerId. '/view')->with('success', 'Add new career staff success.');
	}

	public function getEdit($id)
	{
		$careerStaff = $this->careerStaff->findOrFail($id);

		return view('admin.career.staff.edit', compact('careerStaff'));
	}

	public function postEdit($id, Request $request)
	{
		$careerStaff = $this->careerStaff->findOrFail($id);

		// Validate
		$this->validate($request, $this->validationRules);

		$careerStaff->staff_id = $request->input('staff');
		$careerStaff->save();

		return redirect('admin/career/' .$careerStaff->career_id. '/view')->with('success', 'Update career staff success.');
	}

	public function getDelete($id)
	{
		if (is_null($careerStaff = $this->careerStaff->find($id))) 
    	{
    		return redirect('admin/career/' .$careerStaff->career_id. '/view')->with('error', 'Career staff not exist.');
    	}

        // Delete the career staff
    	$careerStaff->delete();

    	return redirect('admin/career/' .$careerStaff->career_id. '/view')->with('success', 'Delete career staff success.');
	}

}