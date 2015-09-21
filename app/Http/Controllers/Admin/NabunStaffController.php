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
		'position' => 'required',
		'image'    => '',
		'phone'    => '',
		);

	public function __construct(Staff $staff)
	{  
		$this->staff = $staff;
	}

	public function index()
	{
		$members = $this->staff->orderBy('id', 'asc')->paginate(20);

		return view('admin.staff.index', compact('members'));
	}

	public function show($id)
	{
		$staff = $this->staff->findOrFail($id);

		return view('admin.staff.show', compact('staff'));
	}

	public function create()
	{
		return view('admin.staff.create');
	}

	public function store(Request $request)
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
			$image     = Image::make(Input::file('image'))->save('uploads/'.$imagename);
			if($image)
			{
				$staff->image = $image->basename;
				$staff->save();
			}
		}

		return redirect('admin/staff');
	}

	public function edit($id)
	{
		$members = $this->staff->findOrFail($id);

		return view('admin.staff.edit', compact('members'));
	}

	public function update($id, Request $request)
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
			$image     = Image::make(Input::file('image'))->save('uploads/'.$imagename);
			if($image)
			{
				$staff->image = $image->basename;
				$staff->save();
			}
		}

		return redirect('admin/staff');
	}

}
