<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Staff extends Model {

	protected $table = 'staff';

	protected $fillable = ['name', 'nickname', 'position', 'phone'];
	
	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}

	public function career()
	{
		return $this->belongsTo('App\Models\Career', 'id');
	}

	public function thumbnail($default = 'dummy.jpg')
	{   
		$filter = 'small';

		if($this->image == '')
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$default );
		}
		else
		{
			return asset( config('imagecache.route').'/'.$filter.'/'.$this->image );
		}
	}

}