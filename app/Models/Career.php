<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use App\Models\CareerStaff;
use App\Models\Wage;

class Career extends Model {

	use SoftDeletes;

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

	public function wages()
	{
		return $this->hasMany('App\Models\Wage');
	}

	public function careerStaff()
	{
		return $this->hasMany('App\Models\CareerStaff');
	}

	public function getWageCount($careerId) 
	{
		$wageCount = Wage::where('career_id', $careerId)->count();
		return $wageCount;
	}

	public function getStaffCount($careerId) 
	{
		$staffCount = CareerStaff::where('career_id', $careerId)->count();
		return $staffCount;
	}

	public function scopePublished($query)
	{
		$query->where('published_date', '<=', Carbon::now());
	}

	public function setPublishedDateAttribute($date)
	{
		$this->attributes['published_date'] = Carbon::parse($date);
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

	public function getPublishedDateAttribute($date)
	{
		return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d M Y');
	}

	public function getCreatedAtAttribute($date)
	{
		return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d M Y');
	}

	public function getUpdatedAtAttribute($date)
	{
		return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d M Y');
	}

}
