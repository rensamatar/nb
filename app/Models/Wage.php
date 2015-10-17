<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Career;

class Wage extends Model {

	use SoftDeletes;

	protected $table = 'wage';

	protected $fillable = array('title');

	public function career()
	{
		return $this->belongsTo('App\Models\Career');
	}

}
