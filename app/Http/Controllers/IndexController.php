<?php

namespace App\Http\Controllers;

use DB,Redirect,Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function index()
	{
	
		return view('home/index');
	}

	
}



?>