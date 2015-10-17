<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Wage;
use App\Models\CareerStaff;
use Input;
use Image;
use Auth;

class NabunCareersController extends Controller {

	protected $career;
	protected $wages;
	protected $staff;
	protected $validationRules = array(
		'title'          => 'required|min:3',
		'banner'         => '',
		'author'         => '',
		'attribute'      => 'required',
		'gender'         => 'required',
		'age'            => 'required',
		'qualifications' => 'required',
		'published_date' => 'required|date'
		);

	public function __construct(Career $career, Wage $wages, CareerStaff $staff)
	{  
		$this->career = $career;
		$this->wages  = $wages;
		$this->staff  = $staff;
	}

	public function getIndex()
	{
		$careers = $this->career->latest()->published()->paginate(20);

		return view('admin.career.index', compact('careers'));
	}

	public function getCreate()
	{
		return view('admin.career.create');
	}

	public function postCreate(Request $request)
	{
		// Validate
		$this->validate($request, $this->validationRules);

		$career = new Career;
		$career->title          = $request->input('title');
		$career->author         = Auth::user()->getFullName();
		$career->attribute      = $request->input('attribute');
		$career->gender         = $request->input('gender');
		$career->age            = $request->input('age');
		$career->qualifications = $request->input('qualifications');
		$career->published_date = $request->input('published_date');
		$career->save();

		// Now check if image file exist
		if (Input::hasFile('banner'))
		{
			$ext       = Input::file('banner')->getClientOriginalExtension();
			$imagename = 'career_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('banner'))->save('uploads/career/'.$imagename);
			if($image)
			{
				$career->banner = $image->basename;
				$career->save();
			}
		}

		return redirect('admin/career/' .$career->id. '/view')->with('success', 'Create new career success.');
	}

	public function getEdit($id)
	{
		$career = $this->career->findOrFail($id);

		return view('admin.career.edit', compact('career'));
	}

	public function postEdit($id, Request $request)
	{
		$career = $this->career->findOrFail($id);

		// Validate
		$this->validate($request, $this->validationRules);

		$career->title          = $request->input('title');
		$career->author         = Auth::user()->getFullName();
		$career->attribute      = $request->input('attribute');
		$career->gender         = $request->input('gender');
		$career->age            = $request->input('age');
		$career->qualifications = $request->input('qualifications');
		$career->published_date = $request->input('published_date');
		$career->save();

		// Now check if image file exist
		if (Input::hasFile('banner'))
		{
			$ext       = Input::file('banner')->getClientOriginalExtension();
			$imagename = 'career_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('banner'))->save('uploads/career/'.$imagename);
			if($image)
			{
				$career->banner = $image->basename;
				$career->save();
			}
		}

		return redirect('admin/career/' .$career->id. '/view')->with('success', 'Update career success.');
	}


	public function getView($id)
	{
		$career = $this->career->findOrFail($id);

		$wages = $this->wages->where('career_id', $id)->get();

		$members = $this->staff->where('career_id', $id)->get();

		return view('admin.career.show', compact('career', 'wages', 'members'));
	}

	public function getDelete($id)
	{
		if (is_null($career = $this->career->find($id))) 
    	{
    		return redirect('admin/career')->with('error', 'Career not exist.');
    	}

        // Delete the career
    	$career->delete();

    	return redirect('admin/career')->with('success', 'Delete career success.');
	}

	public function getRestore($id = null)
	{

		if (is_null($career = $this->career->find($id))) 
    	{
    		return redirect('admin/career')->with('error', 'Career not exist.');
    	}

        // Restore the career 
    	$career->restore();

    	return redirect('admin/career')->with('success', 'Restore career success.');
	}

}
