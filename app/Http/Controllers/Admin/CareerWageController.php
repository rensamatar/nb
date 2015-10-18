<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Wage;
use Input;
use Image;
use Auth;

class CareerWageController extends Controller {

	protected $career;
	protected $wage;
	protected $validationRules = array(
		'title' => 'required|min:3'
		);

	public function __construct(Career $career, Wage $wage)
	{  
		$this->career = $career;
		$this->wage  = $wage;
	}

	public function getCreate($careerId = null)
	{
		if (is_null($career = $this->career->find($careerId))) 
    	{
    		return redirect('admin/career')->with('error', 'Career not exist.');
    	}

		return view('admin.career.wage.create', compact('career'));
	}

	public function postCreate($careerId, Request $request)
	{
		if (is_null($career = $this->career->find($careerId))) 
    	{
    		return redirect('admin/career')->with('error', 'Career not exist.');
    	}

    	// Validate
		$this->validate($request, $this->validationRules);

		$wage = new Wage;
		$wage->career_id = $careerId;
		$wage->title     = $request->input('title');
		$wage->save();

		return redirect('admin/career/' .$careerId. '/view')->with('success', 'Create new wage success.');
	}

	public function getEdit($id)
	{
		$wage = $this->wage->findOrFail($id);

		return view('admin.career.wage.edit', compact('wage'));
	}

	public function postEdit($id, Request $request)
	{
		$wage   = $this->wage->findOrFail($id);

		// Validate
		$this->validate($request, $this->validationRules);

		$wage->title = $request->input('title');
		$wage->save();

		return redirect('admin/career/' .$wage->career_id. '/view')->with('success', 'Update wage success.');
	}

	public function getDelete($id)
	{
		if (is_null($wage = $this->wage->find($id))) 
    	{
    		return redirect('admin/career/' .$wage->career_id. '/view')->with('error', 'Wage not exist.');
    	}

        // Delete the staff
    	$wage->delete();

    	return redirect('admin/career/' .$wage->career_id. '/view')->with('success', 'Delete Wage success.');
	}

}