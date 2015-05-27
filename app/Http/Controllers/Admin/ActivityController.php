<?php namespace App\Http\Controllers\Admin;

use App\Activity;
use Illuminate\Http\Request;
use App\Http\Requests\ActivityRequest;
use App\Http\Controllers\Controller as Controller;


class ActivityController extends Controller {

	public function index()
	{
		$activities = Activity::latest()->published()->get();

		return view('admin.activity.index', compact('activities'));
	}

	public function show($id)
	{
		$activity = Activity::findOrFail($id);

		return view('admin.activity.show', compact('activity'));
	}

	public function create()
	{
		return view('admin.activity.create');
	}

	public function store(ActivityRequest $request)
	{
		Activity::create($request->all());

		return redirect('activities');
	}

	public function edit($id)
	{
		$activity = Activity::findOrFail($id);

		return view('admin.activity.edit', compact('activity'));
	}

	public function update($id, ActivityRequest $request)
	{
		$activity = Activity::findOrFail($id);

		$activity->update($request->all());

		return redirect('activities');
	}

}
