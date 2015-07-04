<?php namespace App\Http\Controllers\Admin;

use App\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Input;
use Image;
use Auth;

class NabunActivityController extends Controller {

	protected $activity;
	protected $validationRules = array(
		'title'          => 'required|min:3',
		'body'           => 'required',
		'banner'		 => '',
		'author'         => '',
		'published_date' => 'required|date'
		);

	public function __construct(Activity $activity)
	{  
		$this->activity = $activity;
	}

	public function index()
	{
		$activities = $this->activity->latest()->published()->get();

		return view('admin.activity.index', compact('activities'));
	}

	public function show($id)
	{
		$activity = $this->activity->findOrFail($id);

		return view('admin.activity.show', compact('activity'));
	}

	public function create()
	{
		return view('admin.activity.create');
	}

	public function store(Request $request)
	{
		// Validate
		$this->validate($request, $this->validationRules);

		$activity = new Activity;
		$activity->title          = $request->input('title');
		$activity->body           = $request->input('body');
		$activity->author         = Auth::user()->getFullName();
		$activity->published_date = $request->input('published_date');
		$activity->save();

		// Now check if image file exist
		if (Input::hasFile('banner'))
		{
			$ext       = Input::file('banner')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('banner'))->save('uploads/'.$imagename);
			if($image)
			{
				$activity->banner = $image->basename;
				$activity->save();
			}
		}

		return redirect('activity');
	}

	public function edit($id)
	{
		$activity = $this->activity->findOrFail($id);

		return view('admin.activity.edit', compact('activity'));
	}

	public function update($id, Request $request)
	{
		$activity = $this->activity->findOrFail($id);

		// Validate
		$this->validate($request, $this->validationRules);

		$activity->title          = $request->input('title');
		$activity->body           = $request->input('body');
		$activity->author         = Auth::user()->getFullName();
		$activity->published_date = $request->input('published_date');
		$activity->save();

		// Now check if image file exist
		if (Input::hasFile('banner'))
		{
			$ext       = Input::file('banner')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('banner'))->save('uploads/'.$imagename);
			if($image)
			{
				$activity->banner = $image->basename;
				$activity->save();
			}
		}

		return redirect('activity');
	}

}
