<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class ActivityPhotos extends Model {

	use SoftDeletes;

	protected $table = 'activity_photos';

	protected $fillable = array('description');

	public function activity()
	{
		return $this->belongsTo('App\Models\Activity');
	}

	public function thumbnail($default = 'no-image.png')
	{   
		$filter = 'backend';

		if($this->photo == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->photo );
		}
	}

	public function originalImage($default = 'no-image.png')
	{   
		$filter = 'large';

		if($this->photo == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->photo );
		}
	}

}
