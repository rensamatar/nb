<?php namespace App\Http\Controllers\Admin;

use App\Models\Career;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NabunCareersController extends Controller {

	public function index()
	{
		$careers = Career::latest()->published()->get();

		return view('admin.career.index', compact('careers'));
	}

	public function show($id)
	{
		$career = Career::findOrFail($id);

		return view('admin.career.show', compact('career'));
	}

	public function create()
	{
		return view('admin.career.create');
	}

	public function store(CareerRequest $request)
	{
		Career::create($request->all());

		return redirect('admin/career');
	}

	public function edit($id)
	{
		$career = Career::findOrFail($id);

		return view('admin.career.edit', compact('career'));
	}

	public function update($id, CareerRequest $request)
	{
		$career = Career::findOrFail($id);

		$career->update($request->all());

		return redirect('admin/career');
	}

}
