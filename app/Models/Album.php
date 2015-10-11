<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Images;

class Album extends Model {

	protected $table = 'albums';

	protected $fillable = array('name','description','cover_image');

	public function Photos()
	{
		return $this->hasMany('App\Models\Images');
	}

}
