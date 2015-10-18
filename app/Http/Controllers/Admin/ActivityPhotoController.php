<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\ActivityPhotos;
use Input;
use Image;
use Auth;

class ActivityPhotoController extends Controller {

	protected $activity;
	protected $photo;
	protected $validationRules = array(
		'description' => 'required|min:3',
		'photo'       => 'image|max:1024'
		);

	public function __construct(Activity $activity, ActivityPhotos $photo)
	{  
		$this->activity = $activity;
		$this->photo    = $photo;
	}

	public function getCreate($activityId = null)
	{
		if (is_null($activity = $this->activity->find($activityId))) 
		{
			return redirect('admin/activity')->with('error', 'Activity not exist.');
		}

		return view('admin.activity.photo.create', compact('activity'));
	}

	public function postCreate($activityId, Request $request)
	{
		if (is_null($activity = $this->activity->find($activityId))) 
		{
			return redirect('admin/activity')->with('error', 'Activity not exist.');
		}

    	// Validate
		$this->validate($request, $this->validationRules);

		$photo = new ActivityPhotos;
		$photo->activity_id = $activityId;
		$photo->description = $request->input('description');
		$photo->save();

		// Now check if image image file exist
		if (Input::hasFile('photo'))
		{
			$ext       = Input::file('photo')->getClientOriginalExtension();
			$imagename = 'photo_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('photo'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$photo->photo = $image->basename;
				$photo->save();
			}
		}

		return redirect('admin/activity/' .$activityId. '/view')->with('success', 'Add new photo success.');
	}

	public function getEdit($id)
	{
		$photo = $this->photo->findOrFail($id);

		return view('admin.activity.photo.edit', compact('photo'));
	}

	public function postEdit($id, Request $request)
	{
		$photo = $this->photo->findOrFail($id);

		// Validate
		$this->validate($request, $this->validationRules);

		$photo->description = $request->input('description');
		$photo->save();

		// Now check if image image file exist
		if (Input::hasFile('photo'))
		{
			$ext       = Input::file('photo')->getClientOriginalExtension();
			$imagename = 'photo_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('photo'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$photo->photo = $image->basename;
				$photo->save();
			}
		}

		return redirect('admin/activity/' .$photo->activity_id. '/view')->with('success', 'Update photo success.');
	}

	public function getDelete($id)
	{
		if (is_null($photo = $this->photo->find($id))) 
		{
			return redirect('admin/activity/' .$photo->activity_id. '/view')->with('error', 'Wage not exist.');
		}

        // Delete the photo
		$photo->delete();

		return redirect('admin/activity/' .$photo->activity_id. '/view')->with('success', 'Delete Wage success.');
	}

}