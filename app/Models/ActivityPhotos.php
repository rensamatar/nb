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

}
