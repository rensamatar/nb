<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Activity extends Model {

	protected $table = 'activity';

	protected $fillable = ['title', 'body', 'published_date'];

	public function scopePublished($query)
	{
		$query->where('published_date', '<=', Carbon::now());
	}

	public function setPublishedDateAttribute($date)
	{
		$this->attributes['published_date'] = Carbon::parse($date);
	}

	public function thumbnail($default = 'dummy.jpg')
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
