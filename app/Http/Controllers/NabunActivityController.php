<?php namespace App\Http\Controllers;

use App\Models\Activity;

class NabunActivityController extends Controller {

	protected $activity;

	public function __construct(Activity $activity)
	{
		$this->middleware('guest');
		$this->activity = $activity;
	}

	public function index()
	{
		$activities = $this->activity->latest()->published()->get();

		return view('activity.index', compact('activities'));
	}

	public function view($id)
	{
		$activity = $this->activity->where('id', $id)->first();
		$recent = $this->activity->where('id', '!=', $id)->latest()->published()->take(5);

		return view('activity.view', compact('activity', 'recent'));
	}

}
