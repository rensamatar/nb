<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactUsController extends Controller {

	protected $rules = array(
		'name'    => 'required|min:2',
		'email'   => 'required|email',
		'subject' => 'required|min:3',
		'message' => 'required|min:3',
		);

	public function __construct()
	{
		$this->middleware('guest');
	}

	public function index()
	{
		return view('pages.contact-us');
	}

	public function postIndex(Request $request)
	{    
		$this->validate($request, $this->rules);

		$data = array(
			'name'     =>  $request->input('name'),
			'email'    =>  $request->input('email'),
			'subject'  =>  $request->input('subject'),
			'messages' =>  $request->input('message'),
			);

		$from = config('mail.from');

		Mail::send('emails.contact-us', $data, function ($m) use ($from, $data) 
		{
			$m->to($from['address'], $from['name']);
			$m->subject('Contact Form Submission');
			$m->from($data['email'], $data['name']);
		});

		return redirect('contact')->with('success', 'Thank you for contact us.');

	}

}
