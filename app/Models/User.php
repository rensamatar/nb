<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Carbon\Carbon;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword, EntrustUserTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['firstname', 'lastname', 'email', 'password', 'gravatar', 'last_login'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function checkPassword($password)
    {   
        if (Auth::attempt(['email' => $this->email, 'password' => $password]))
        {
            return true;
        }

        return false;    
    }

	public function nabunActivity()
	{
		return $this->belongTos('Activity');
	}

	public function nabunCareer()
	{
		return $this->belongTos('Career');
	}

	public function getFullName()
	{
		return $this->firstname . ' ' . $this->lastname;
	}

	public function getRegisterDate()
	{
		return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->toFormattedDateString();
	}

	public function gravatar()
    {
        $gravatar = md5(strtolower(trim($this->gravatar)));
        return "//gravatar.org/avatar/{$gravatar}";
    }

}
