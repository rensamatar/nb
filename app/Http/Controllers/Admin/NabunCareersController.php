<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use Input;
use Image;
use Auth;

class NabunCareersController extends Controller {

	protected $career;
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

	public function __construct(Career $career)
	{  
		$this->career = $career;
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
		//wage
		$career->wage_1         = $request->input('wage_1');
		$career->wage_2         = $request->input('wage_2');
		$career->wage_3         = $request->input('wage_3');
		$career->wage_4         = $request->input('wage_4');
		$career->wage_5         = $request->input('wage_5');
		$career->wage_6         = $request->input('wage_6');
		$career->wage_7         = $request->input('wage_7');
		$career->wage_8         = $request->input('wage_8');
		$career->wage_9         = $request->input('wage_9');
		$career->wage_10        = $request->input('wage_10');
		$career->wage_11        = $request->input('wage_11');
		$career->wage_12        = $request->input('wage_12');
		$career->wage_13        = $request->input('wage_13');
		$career->wage_14        = $request->input('wage_14');
		$career->wage_15        = $request->input('wage_15');
		$career->wage_16        = $request->input('wage_16');
		//Staff
		$career->staff_1        = $request->input('staff_1');
		$career->staff_2        = $request->input('staff_2');
		$career->staff_3        = $request->input('staff_3');
		$career->staff_4        = $request->input('staff_4');
		$career->save();

		// Now check if image file exist
		if (Input::hasFile('banner'))
		{
			$ext       = Input::file('banner')->getClientOriginalExtension();
			$imagename = 'career_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('banner'))->save('uploads/'.$imagename);
			if($image)
			{
				$career->banner = $image->basename;
				$career->save();
			}
		}

		return redirect('admin/career');
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
		//wage
		$career->wage_1         = $request->input('wage_1');
		$career->wage_2         = $request->input('wage_2');
		$career->wage_3         = $request->input('wage_3');
		$career->wage_4         = $request->input('wage_4');
		$career->wage_5         = $request->input('wage_5');
		$career->wage_6         = $request->input('wage_6');
		$career->wage_7         = $request->input('wage_7');
		$career->wage_8         = $request->input('wage_8');
		$career->wage_9         = $request->input('wage_9');
		$career->wage_10        = $request->input('wage_10');
		$career->wage_11        = $request->input('wage_11');
		$career->wage_12        = $request->input('wage_12');
		$career->wage_13        = $request->input('wage_13');
		$career->wage_14        = $request->input('wage_14');
		$career->wage_15        = $request->input('wage_15');
		$career->wage_16        = $request->input('wage_16');
		//Staff
		$career->staff_1        = $request->input('staff_1');
		$career->staff_2        = $request->input('staff_2');
		$career->staff_3        = $request->input('staff_3');
		$career->staff_4        = $request->input('staff_4');
		$career->save();

		// Now check if image file exist
		if (Input::hasFile('banner'))
		{
			$ext       = Input::file('banner')->getClientOriginalExtension();
			$imagename = 'career_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('banner'))->save('uploads/'.$imagename);
			if($image)
			{
				$career->banner = $image->basename;
				$career->save();
			}
		}

		return redirect('admin/career');
	}


	public function getView($id)
	{
		$career = $this->career->findOrFail($id);

		return view('admin.career.show', compact('career'));
	}

	public function getDelete()
	{

	}

	public function getRestore()
	{
		
	}


}
