<?php namespace App\Http\Controllers\Admin;

use App\Models\Activity;
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
		'banner'         => '',
		'author'         => '',
		'published_date' => 'required|date',
		'img_file_01'    => 'image|mimes:jpeg,png|min:1|max:1024',
		'img_file_02'    => 'image|mimes:jpeg,png|min:1|max:1024',
		'img_file_03'    => 'image|mimes:jpeg,png|min:1|max:1024',
		'img_file_04'    => 'image|mimes:jpeg,png|min:1|max:1024',
		'img_file_05'    => 'image|mimes:jpeg,png|min:1|max:1024',
		'img_file_06'    => 'image|mimes:jpeg,png|min:1|max:1024',
		'img_file_07'    => 'image|mimes:jpeg,png|min:1|max:1024',
		'img_file_08'    => 'image|mimes:jpeg,png|min:1|max:1024'
		);

	public function __construct(Activity $activity)
	{  
		$this->activity = $activity;
	}

	public function index()
	{
		$activities = $this->activity->latest()->published()->paginate(20);

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

		// Now check if banner image file exist
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

		// Now check if image file_01 exist
		if (Input::hasFile('img_file_01'))
		{
			$ext       = Input::file('img_file_01')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_01'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_01 = $image->basename;
				$activity->save();
			}
		}

		// Now check if image file_02 exist
		if (Input::hasFile('img_file_02'))
		{
			$ext       = Input::file('img_file_02')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_02'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_02 = $image->basename;
				$activity->save();
			}
		}

		// Now check if image file_03 exist
		if (Input::hasFile('img_file_03'))
		{
			$ext       = Input::file('img_file_03')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_03'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_03 = $image->basename;
				$activity->save();
			}
		}

		// Now check if image file_04 exist
		if (Input::hasFile('img_file_04'))
		{
			$ext       = Input::file('img_file_04')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_04'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_04 = $image->basename;
				$activity->save();
			}
		}

		// Now check if image file_05 exist
		if (Input::hasFile('img_file_05'))
		{
			$ext       = Input::file('img_file_05')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_05'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_05 = $image->basename;
				$activity->save();
			}
		}

		// Now check if image file_06 exist
		if (Input::hasFile('img_file_06'))
		{
			$ext       = Input::file('img_file_06')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_06'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_06 = $image->basename;
				$activity->save();
			}
		}

		// Now check if image file_07 exist
		if (Input::hasFile('img_file_07'))
		{
			$ext       = Input::file('img_file_07')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_07'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_07 = $image->basename;
				$activity->save();
			}
		}

		// Now check if image file_08 exist
		if (Input::hasFile('img_file_08'))
		{
			$ext       = Input::file('img_file_08')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_08'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_08 = $image->basename;
				$activity->save();
			}
		}

		return redirect('admin/activity');
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

		// Now check if banner image file exist
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

		// Now check if image file_01 exist
		if (Input::hasFile('img_file_01'))
		{
			$ext       = Input::file('img_file_01')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_01'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_01 = $image->basename;
				$activity->save();
			}
		}

		// Now check if image file_02 exist
		if (Input::hasFile('img_file_02'))
		{
			$ext       = Input::file('img_file_02')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_02'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_02 = $image->basename;
				$activity->save();
			}
		}

		// Now check if image file_03 exist
		if (Input::hasFile('img_file_03'))
		{
			$ext       = Input::file('img_file_03')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_03'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_03 = $image->basename;
				$activity->save();
			}
		}

		// Now check if image file_04 exist
		if (Input::hasFile('img_file_04'))
		{
			$ext       = Input::file('img_file_04')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_04'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_04 = $image->basename;
				$activity->save();
			}
		}

		// Now check if image file_05 exist
		if (Input::hasFile('img_file_05'))
		{
			$ext       = Input::file('img_file_05')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_05'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_05 = $image->basename;
				$activity->save();
			}
		}

		// Now check if image file_06 exist
		if (Input::hasFile('img_file_06'))
		{
			$ext       = Input::file('img_file_06')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_06'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_06 = $image->basename;
				$activity->save();
			}
		}

		// Now check if image file_07 exist
		if (Input::hasFile('img_file_07'))
		{
			$ext       = Input::file('img_file_07')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_07'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_07 = $image->basename;
				$activity->save();
			}
		}

		// Now check if image file_08 exist
		if (Input::hasFile('img_file_08'))
		{
			$ext       = Input::file('img_file_08')->getClientOriginalExtension();
			$imagename = 'activity_'.str_random(10).'.'.$ext ;
			$image     = Image::make(Input::file('img_file_08'))->save('uploads/activity/'.$imagename);
			if($image)
			{
				$activity->img_file_08 = $image->basename;
				$activity->save();
			}
		}

		return redirect('admin/activity');
	}

}
