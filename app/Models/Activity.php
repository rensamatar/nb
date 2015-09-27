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

	public function thumbnail_01($default = 'dummy.jpg')
	{   
		$filter = 'small';

		if($this->img_file_01 == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->img_file_01 );
		}
	}

	public function thumbnail_02($default = 'dummy.jpg')
	{   
		$filter = 'small';

		if($this->img_file_02 == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->img_file_02 );
		}
	}

	public function thumbnail_03($default = 'dummy.jpg')
	{   
		$filter = 'small';

		if($this->img_file_03 == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->img_file_03 );
		}
	}

	public function thumbnail_04($default = 'dummy.jpg')
	{   
		$filter = 'small';

		if($this->img_file_04 == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->img_file_04 );
		}
	}

	public function thumbnail_05($default = 'dummy.jpg')
	{   
		$filter = 'small';

		if($this->img_file_05 == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->img_file_05 );
		}
	}

	public function thumbnail_06($default = 'dummy.jpg')
	{   
		$filter = 'small';

		if($this->img_file_06 == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->img_file_06 );
		}
	}

	public function thumbnail_07($default = 'dummy.jpg')
	{   
		$filter = 'small';

		if($this->img_file_07 == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->img_file_07 );
		}
	}

	public function thumbnail_08($default = 'dummy.jpg')
	{   
		$filter = 'small';

		if($this->img_file_08 == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->img_file_08 );
		}
	}

}
