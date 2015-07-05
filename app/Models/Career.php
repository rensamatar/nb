<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Career extends Model {

	protected $table = 'nabun_career';

	protected $fillable = ['title', 'body', 'published_date'];

	public function scopePublished($query)
	{
		$query->where('published_date', '<=', Carbon::now());
	}

	public function setPublishedDateAttribute($date)
	{
		$this->attributes['published_date'] = Carbon::parse($date);
	}

	public function thumbnail($default = 'no-image.jpg')
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

}
