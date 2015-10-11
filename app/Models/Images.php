<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Images extends Model {

	protected $table = 'images';

	protected $fillable = ['album_id', 'description', 'image'];

	
}
