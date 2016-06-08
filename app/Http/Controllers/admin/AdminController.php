<?php

namespace App\Http\Controllers\admin;

use DB,Redirect,Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function index()
	{
	
		return view('admin/index');
	}

	
}



?>