<?php namespace App\Http\Controllers\Admin;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Input;
use Image;
use Auth;

class NabunStaffController extends Controller {

	protected $staff;
	protected $validationRules = array(
		'name'     => 'required|min:3',
		'nickname' => '',
		'image'    => '',
		'position' => 'required',
		'phone'    => 'required',
		);

	public function __construct(Staff $staff)
	{  
		$this->staff = $staff;
	}

	public function getIndex()
	{
		$members = $this->staff->orderBy('id', 'asc')->paginate(20);

		return view('admin.staff.index', compact('members'));
	}

	public function getCreate()
	{
		return view('admin.staff.create');
	}

	public function postCreate(Request $request)
	{
		// Validate
		$this->validate($request, $this->validationRules);

		$staff = new Staff;
		$staff->name     = $request->input('name');
		$staff->nickname = $request->input('nickname');
		$staff->position = $request->input('position');
		$staff->phone    = $request->input('phone');
		$staff->save();

		// Now check if image file exist
		if (Input::hasFile('image'))
		{
			$ext       = Input::file('image')->getClientOriginalExtension();
			$imagename = 'staff_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('image'))->save('uploads/staff/'.$imagename);
			if($image)
			{
				$staff->image = $image->basename;
				$staff->save();
			}
		}

		return redirect('admin/staff')->with('success', 'Create new staff success.');
	}

	public function getEdit($id)
	{
		$members = $this->staff->findOrFail($id);

		return view('admin.staff.edit', compact('members'));
	}

	public function postEdit($id, Request $request)
	{
		$staff = $this->staff->findOrFail($id);

		// Validate
		$this->validate($request, $this->validationRules);

		$staff->name     = $request->input('name');
		$staff->nickname = $request->input('nickname');
		$staff->position = $request->input('position');
		$staff->phone    = $request->input('phone');
		$staff->save();

		// Now check if image file exist
		if (Input::hasFile('image'))
		{
			$ext       = Input::file('image')->getClientOriginalExtension();
			$imagename = 'staff_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('image'))->save('uploads/staff/'.$imagename);
			if($image)
			{
				$staff->image = $image->basename;
				$staff->save();
			}
		}

		return redirect('admin/staff')->with('success', 'Update staff success.');
	}

	public function getView($id)
	{
    	if (is_null($staff = $this->staff->find($id))) 
    	{
    		return redirect('admin/staff')->with('error', 'Staff not exist.');
    	}

        // get previous id
    	$previous = $this->staff->where('id', '<', $id)->max('id');

        // get next id
    	$next = $this->staff->where('id', '>', $id)->min('id');

        // get last id
    	$maxId = $this->staff->max('id');

    	return view('admin.staff.show', compact('staff', 'previous', 'next', 'maxId'));
	}

	public function getDelete($id)
	{
		if (is_null($staff = $this->staff->find($id))) 
    	{
    		return redirect('admin/staff')->with('error', 'Staff not exist.');
    	}

        // Delete the staff
    	$staff->delete();

    	return redirect('admin/staff')->with('success', 'Delete staff success.');
	}

	public function getRestore($id = null)
	{

		if (is_null($staff = $this->staff->find($id))) 
    	{
    		return redirect('admin/staff')->with('error', 'Staff not exist.');
    	}

        // Restore the staff 
    	$staff->restore();

    	return redirect('admin/staff')->with('success', 'Restore staff success.');
	}

}
