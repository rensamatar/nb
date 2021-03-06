<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Request;
use App\Models\ActivityPhotos;

class Activity extends Model {

	use SoftDeletes;

	protected $table = 'activity';

	protected $fillable = ['title', 'body', 'published_date'];

	public function activityPhotos()
	{
		return $this->hasMany('App\Models\ActivityPhotos');
	}

	public function getPhotoCount($activityId) 
	{
		$photoCount = ActivityPhotos::where('activity_id', $activityId)->count();
		return $photoCount;
	}

	public function scopePublished($query)
	{
		$query->where('published_date', '<=', Carbon::now());
	}

	public function setPublishedDateAttribute($date)
	{
		$this->attributes['published_date'] = Carbon::parse($date);
	}

	public function getPublishedDate()
	{
		return Carbon::createFromFormat('Y-m-d H:i:s', $this->published_date)->format('Y-m-d');
	}

	public function thumbnail($default = 'no-image.png')
	{   
		$filter = 'backend';

		if($this->banner == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->banner );
		}
	}

	// Add click to access ranking 
    function addClick()
    {
        $this->click = $this->click + 1;
        $this->save();
    }

	// public function getPublishedDateAttribute($date)
	// {
	// 	return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d M Y');
	// }

	// public function getCreatedAtAttribute($date)
	// {
	// 	return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d M Y');
	// }

	// public function getUpdatedAtAttribute($date)
	// {
	// 	return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d M Y');
	// }

}
