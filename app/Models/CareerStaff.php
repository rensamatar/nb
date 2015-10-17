<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class CareerStaff extends Model {

	use SoftDeletes;

	protected $table = 'career_staff';

	protected $fillable = array();

	public function career()
	{
		return $this->belongsTo('App\Models\Career');
	}

	public function staff()
	{
		return $this->belongsTo('App\Models\Staff');
	}

}
