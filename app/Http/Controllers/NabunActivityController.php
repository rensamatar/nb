<?php namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityPhotos;

class NabunActivityController extends Controller {

	protected $activity;
	protected $photo;

	public function __construct(Activity $activity, ActivityPhotos $photo)
	{
		$this->middleware('guest');
		$this->activity = $activity;
		$this->photo    = $photo;
	}

	public function index()
	{
		$activities = $this->activity->latest()->published()->get();

		return view('activity.index', compact('activities'));
	}

	public function view($id)
	{
		$activity = $this->activity->where('id', $id)->first();
		// click count
		$activity->addClick();

		$photos = $this->photo->where('activity_id', $id)->get();

		$recent = $this->activity->where('id', '!=', $id)->orderBy('click', 'DESC')->published()->take(5)->get();

		$previousActivity = $this->activity->where('id', '<', $id)->max('id');
		$nextActivity = $this->activity->where('id', '>', $id)->min('id');

		return view('activity.view', compact('activity', 'photos', 'recent', 'previousActivity', 'nextActivity'));
	}

}
