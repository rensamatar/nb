<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class BaseController extends Controller {

    protected $messageBag = null;

    public function __construct()
    {
        $this->messageBag = new MessageBag;
    }

    protected function setupLayout()
    {
    	if (!is_null($this->layout)) 
    	{
    		$this->layout = view($this->layout);
    	}
    }

}
