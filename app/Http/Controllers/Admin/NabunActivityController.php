<?php namespace App\Http\Controllers\Admin;

use App\Models\Activity;
use App\Models\ActivityPhotos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Input;
use Image;
use Auth;

class NabunActivityController extends Controller {

	protected $activity;
	protected $photo;
	protected $validationRules = array(
		'title'          => 'required|min:3',
		'body'           => 'required',
		'banner'         => '',
		'author'         => '',
		'published_date' => 'required|date'
		);

	public function __construct(Activity $activity, ActivityPhotos $photo)
	{  
		$this->activity = $activity;
		$this->photo    = $photo;
	}

	public function getIndex()
	{
		$activities = $this->activity->latest()->published()->paginate(20);

		return view('admin.activity.index', compact('activities'));
	}

	public function getCreate()
	{
		return view('admin.activity.create');
	}

	public function postCreate(Request $request)
	{
		// Validate
		$this->validate($request, $this->validationRules);

		$activity = new Activity;
		$activity->title          = $request->input('title');
		$activity->body           = $request->input('body');
		$activity->author         = Auth::user()->getFullName();
		$activity->published_date = $request->input('published_date');
		$activity->save();

		// Now check if banner image file exist
		if (Input::hasFile('banner'))
		{
			$ext       = Input::file('banner')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('banner'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->banner = $image->basename;
				$activity->save();
			}
		}

		return redirect('admin/activity/' .$activity->id. '/view')->with('success', 'Create activity success.');
	}

	public function getEdit($id)
	{
		$activity = $this->activity->findOrFail($id);

		return view('admin.activity.edit', compact('activity'));
	}

	public function postEdit($id, Request $request)
	{
		$activity = $this->activity->findOrFail($id);

		// Validate
		$this->validate($request, $this->validationRules);

		$activity->title          = $request->input('title');
		$activity->body           = $request->input('body');
		$activity->author         = Auth::user()->getFullName();
		$activity->published_date = $request->input('published_date');
		$activity->save();

		// Now check if banner image file exist
		if (Input::hasFile('banner'))
		{
			$ext       = Input::file('banner')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('banner'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->banner = $image->basename;
				$activity->save();
			}
		}

		return redirect('admin/activity/' .$activity->id. '/view')->with('success', 'Update activity success.');
	}

	public function getView($id)
	{
		$activity = $this->activity->findOrFail($id);

		$photos = $this->photo->where('activity_id', $id)->get();

		return view('admin.activity.show', compact('activity', 'photos'));
	}

	public function getDelete($id)
	{
		if (is_null($activity = $this->activity->find($id))) 
		{
			return redirect('admin/activity')->with('error', 'Activity not exist.');
		}

        // Delete the activity
		$activity->delete();

		return redirect('admin/activity')->with('success', 'Delete activity success.');
	}

	public function getRestore($id = null)
	{
		if (is_null($activity = $this->activity->find($id))) 
		{
			return redirect('admin/activity')->with('error', 'Activity not exist.');
		}

        // Restore the activity 
		$activity->restore();

		return redirect('admin/activity')->with('success', 'Restore activity success.');
	}

	// for summernote
	public function postUpload()
	{   
        // Now check if image file exist
		if (Input::hasFile('file'))
		{

			$ext       = Input::file('file')->getClientOriginalExtension();
			$imagename = 'post_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('file'))->save('uploads/activity/'.$imagename);

			echo  '/uploads/activity/'.$image->basename;

		}
	}

}
