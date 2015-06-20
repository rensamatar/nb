<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'firstname'             => 'required|min:3|max:255',
			'lastname'              => 'required|min:3|max:255',
			'email'                 => 'required|email|max:255|unique:users',
			'password'              => 'required|min:8',
			'password_confirmation' => 'required|same:password',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'firstname' => $data['firstname'],
			'lastname'  => $data['lastname'],
			'email'     => $data['email'],
			'password'  => bcrypt($data['password']),
			'gravatar'  => $data['email'],
		]);
	}

}
