<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Staff;

class Career extends Model {

	protected $table = 'career';

	protected $fillable = ['title', 'body', 'published_date'];

	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}

	public function staff()
    {
        return $this->hasMany('App\Models\Staff', 'id');
    }

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
