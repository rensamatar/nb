<?php namespace App\Http\Controllers\Admin;

use App\Models\Career;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Input;
use Image;
use Auth;

class NabunCareersController extends Controller {

	protected $career;
	protected $validationRules = array(
		'title'          => 'required|min:3',
		'body'           => 'required',
		'banner'		 => '',
		'author'         => '',
		'published_date' => 'required|date'
		);

	public function __construct(Career $career)
	{  
		$this->career = $career;
	}

	public function index()
	{
		$careers = $this->career->latest()->published()->paginate(20);

		return view('admin.career.index', compact('careers'));
	}

	public function show($id)
	{
		$career = $this->career->findOrFail($id);

		return view('admin.career.show', compact('career'));
	}

	public function create()
	{
		return view('admin.career.create');
	}

	public function store(Request $request)
	{
		// Validate
		$this->validate($request, $this->validationRules);

		$career = new Career;
		$career->title          = $request->input('title');
		$career->body           = $request->input('body');
		$career->author         = Auth::user()->getFullName();
		$career->published_date = $request->input('published_date');
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

	public function edit($id)
	{
		$career = $this->career->findOrFail($id);

		return view('admin.career.edit', compact('career'));
	}

	public function update($id, Request $request)
	{
		$career = $this->career->findOrFail($id);

		// Validate
		$this->validate($request, $this->validationRules);

		$career->title          = $request->input('title');
		$career->body           = $request->input('body');
		$career->author         = Auth::user()->getFullName();
		$career->published_date = $request->input('published_date');
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

}
