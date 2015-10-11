<?php namespace App\Http\Controllers\Admin;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Input;
use Image;
use Auth;

class AlbumsController extends Controller {

	protected $album;
	protected $rules = array(
			'name'        => 'required',
			'cover_image' =>'required|image'
			);

	public function __construct(Album $album)
	{  
		$this->album = $album;
	}

	public function getList()
	{
		$albums = Album::with('Photos')->get();
		return view('admin/albums/index', compact('albums'));
	}

	public function getAlbum($id)
	{
		//dd(Album::all());
		$album = Album::with('Photos')->find($id);
		//$album = $this->album->findOrFail($id);
		return view('admin/albums/show', compact('album'));
	}

	public function getCreate()
	{
		return view('admin/albums/create_album');
	}

	public function postCreate(Request $request)
	{
		// Validate
		$this->validate($request, $this->rules);

		$file            = Input::file('cover_image');
		$random_name     = str_random(8);
		$destinationPath = 'uploads/albums/';
		$extension       = $file->getClientOriginalExtension();
		$filename        = $random_name.'_cover.'.$extension;
		$uploadSuccess   = Input::file('cover_image')->move($destinationPath, $filename);

		$album = Album::create(array(
			'name'        => $request->input('name'),
			'description' => $request->input('description'),
			'cover_image' => $filename,
			));

	    return redirect('admin/albums/'.$album->id);
	}

	public function getEdit($id)
	{	
		$album = $this->album->findOrFail($id);
		return view('admin.albums.edit_album', compact('album'));
	}

	public function postEdit($id, Request $request)
	{
		$album = $album = $this->album->findOrFail($id);
		// Validate
		$this->validate($request, $this->rules);

		$album->name = $request->input('name');
		$album->description = $request->input('description');
		$album->save();

		// Now check if banner image file exist
		if (Input::hasFile('cover_image'))
		{
			$ext       = Input::file('cover_image')->getClientOriginalExtension();
			$imagename = str_random(8).'_cover'.$ext ;
			$image     = Image::make(Input::file('cover_image'))->save('uploads/albums/'.$imagename);
			if($image)
			{
				$album->cover_image = $image->basename;
				$album->save();
			}
		}

	    return redirect('admin/albums');
	}

	public function getDelete($id)
	{
		$album = Album::find($id);

		$album->delete();

		return redirect('admin/dashboard');
	}

}