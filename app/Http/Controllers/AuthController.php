<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Auth;
use User;
use Mail;
use Role;

class AuthController extends BaseController {

	protected $signInRules = array(
		'email'    => 'required|email',
		'password' => 'required|between:3,32',
		);

	protected $signUpRules = array(
		'firstname'        => 'required|min:3',
		'lastname'         => 'required|min:3',
		'email'            => 'required|email|unique:users',
		'password'         => 'required|min:8',
		'password_confirm' => 'required|min:8|same:password',
		);

	public function __construct(Guard $auth, PasswordBroker $passwords)
	{
		parent::__construct();
		$this->auth      = $auth;
		$this->passwords = $passwords;
		$this->subject   = 'Your Password Reset Link';
	}

	public function getSignin()
	{
		if (Auth::check()) 
		{
			return redirect('/');
		}

		return view('auth.login');
	}

	public function postSignin(Request $request)
	{
		$this->validate($request, $this->signInRules);

		$email    = $request->input('email');
		$password = $request->input('password');

		if (Auth::attempt(['email' => $email, 'password' => $password, 'activated' => 1 ]))
		{
			return redirect()->intended('/');
		}

		return redirect()->back()->withInput()->withErrors($this->messageBag);
	}

	public function getSignup()
	{  
		if (Auth::check()) 
		{
			return redirect('/');
		}

		return view('auth.register');
	}

	public function postSignup(Request $request)
	{
		//dd($request->input('password'));
		//$this->validate($request, $this->signUpRules);

        // Generate Activation Code
		$activation_code = str_random(20) . '+' .$request->input('email');

		$user = new User;
		$user->firstname      = $request->input('firstname');
		$user->lastname       = $request->input('lastname');
		$user->email           = $request->input('email');
		$user->password        = bcrypt($request->input('password'));
		$user->ip_address      = $request->getClientIp(true);
		$user->user_agent      = $_SERVER['HTTP_USER_AGENT'];
		$user->activated       = 0;
		$user->activation_code = $activation_code;
		$user->save();

        // Update Role
		$user->roles()->sync(array(3));

		$data = array(
			'user'          => $user,
			'activationUrl' => url( 'activate', $activation_code ),
			);

		Mail::send('emails.register-activate', $data, function ($m) use ($user) 
		{
			$m->to($user->email, $user->getFullName());
			$m->subject('Welcome ' . $user->getFullName());
		});

		return redirect('auth/signin')->with('success', 'Registered success! Please confirm your email address.');
	}

	public function getActivate($activationCode = null)
	{
		if (Auth::check()) 
		{
			return redirect('/');
		}

		$user = User::where('activation_code', $activationCode)->where('activated', 0)->firstOrFail();

		if ($user) 
		{
			$user->activated = 1;
			$user->save();

			$data = array('user' => $user);

			Mail::send('emails.register-success', $data, function ($m) use ($user) 
			{
				$m->to($user->email, $user->getFullName());
				$m->subject('Congratulations ' . $user->getFullName() );
			}); 

			return redirect('auth/signin')->with('success', 'Your account has been activated.');
		}

		return redirect('auth/signin')->with('error', 'Oops, activation failed.');
	}

	public function getForgotPassword()
	{
		return view('auth.forgot-password');
	}

	use ResetsPasswords;

	public function postForgotPassword(Request $request)
	{
		$this->validate($request, ['email' => 'required|email']);

		$response = $this->passwords->sendResetLink($request->only('email'), function($message)
		{
			$message->from(config('mail.from.address'), 'Nabun Upgrade');
			$message->subject('Password Reminder');
		});

		switch ($response)
		{
			case PasswordBroker::RESET_LINK_SENT:
			return redirect()->back()->with('status', trans($response));

			case PasswordBroker::INVALID_USER:
			return redirect()->back()->withErrors(['email' => trans($response)]);
		}

		return redirect('home')->with('success', 'Password reset link has been send to your email.');
	}

	public function getLogout()
	{
		$user = Auth::getUser();

		Auth::logout();

		return redirect('home')->with('success', 'You have successfully logged out!');
	}

	//-------
	// Admin 
	//-------

	public function getAdminSignin()
	{
		if (Auth::check()) 
		{
			return redirect('admin/dashboard');
		}

		return view('admin.auth.login');
	}

	public function postAdminSignin(Request $request)
	{
        $this->validate($request, $this->signInRules);

		$email    = $request->input('email');
		$password = $request->input('password');
		$remember = $request->input('remember');

		if (Auth::attempt(['email' => $email, 'password' => $password, 'activated' => 1], $remember))
		{
			return redirect()->intended('admin/dashboard');
		}

		$this->messageBag->add('password', 'Email and/or password invalid.'); 

		return redirect()->back()->withInput()->withErrors($this->messageBag);
	}

	public function getAdminSignout()
	{
		$user = Auth::getUser();

		Auth::logout();

		return redirect('admin/signin')->with('success', 'You have successfully logged out!');
	}

}