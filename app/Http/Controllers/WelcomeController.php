<?php

namespace App\Http\Controllers;

use App\ClientItems;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	public function index($lang = 'fr') 
	{
		return view('_modules.welcome', [
            'lang'	=> $lang
        ]);
	}
}