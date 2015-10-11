<?php namespace App\Http\Controllers\Admin;

use App\Models\Album;
use App\Models\Images;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Input;
use Image;
use Auth;

class ImagesController extends Controller {

  public function getAdd($id)
  {
    $album = Album::find($id);
    return view('admin/albums/add_image', compact('album'));
  }

  public function postAdd(Request $request)
  {
    $rules = array(
      'album_id' => 'required|numeric|exists:albums,id',
      'image'    =>'required|image'
      );

    // Validate
    $this->validate($request, $rules);

    $file            = Input::file('image');
    $random_name     = str_random(8);
    $destinationPath = 'uploads/albums/';
    $extension       = $file->getClientOriginalExtension();
    $filename        = $random_name.'_album_image.'.$extension;
    $uploadSuccess   = Input::file('image')->move($destinationPath, $filename);

    Images::create(array(
      'description' => $request->input('description'),
      'image'       => $filename,
      'album_id'    => $request->input('album_id')
      ));

    return redirect('admin/albums/'.$request->input('album_id'));
  }

  public function getDelete($id)
  {
    $image = Images::find($id);
    $image->delete();

    return redirect('admin/albums/'.$image->album_id);
  }

  public function postMove()
  {
    $rules = array(
      'new_album' => 'required|numeric|exists:albums,id',
      'photo'     =>'required|numeric|exists:images,id'
    );
    $validator = Validator::make(Input::all(), $rules);
    if($validator->fails()){
    
      return Redirect::route('index');
    }
    $image = Images::find(Input::get('photo'));
    $image->album_id = Input::get('new_album');
    $image->save();
    return Redirect::route('show_album',array('id'=>Input::get('new_album')));
  }

}