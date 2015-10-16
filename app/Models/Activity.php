<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Request;

class Activity extends Model {

	use SoftDeletes;

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

	public function thumbnail_01($default = 'no-image.png')
	{   
		$filter = 'large';
		if ( Request::is('admin/*'))
        {
           $filter = 'small';
        }

		if($this->img_file_01 == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->img_file_01 );
		}
	}

	public function thumbnail_02($default = 'no-image.png')
	{   
		$filter = 'large';
		if ( Request::is('admin/*'))
        {
           $filter = 'small';
        }

		if($this->img_file_02 == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->img_file_02 );
		}
	}

	public function thumbnail_03($default = 'no-image.png')
	{   
		$filter = 'large';
		if ( Request::is('admin/*'))
        {
           $filter = 'small';
        }

		if($this->img_file_03 == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->img_file_03 );
		}
	}

	public function thumbnail_04($default = 'no-image.png')
	{   
		$filter = 'large';
		if ( Request::is('admin/*'))
        {
           $filter = 'small';
        }

		if($this->img_file_04 == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->img_file_04 );
		}
	}

	public function thumbnail_05($default = 'no-image.png')
	{   
		$filter = 'large';
		if ( Request::is('admin/*'))
        {
           $filter = 'small';
        }

		if($this->img_file_05 == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->img_file_05 );
		}
	}

	public function thumbnail_06($default = 'no-image.png')
	{   
		$filter = 'large';
		if ( Request::is('admin/*'))
        {
           $filter = 'small';
        }

		if($this->img_file_06 == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->img_file_06 );
		}
	}

	public function thumbnail_07($default = 'no-image.png')
	{   
		$filter = 'large';
		if ( Request::is('admin/*'))
        {
           $filter = 'small';
        }

		if($this->img_file_07 == '' )
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->img_file_07 );
		}
	}

	public function thumbnail_08($default = 'no-image.png')
	{   
		$filter = 'large';
		if ( Request::is('admin/*'))
        {
           $filter = 'small';
        }

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
