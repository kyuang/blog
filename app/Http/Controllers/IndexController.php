<?php

namespace App\Http\Controllers;

use DB,Redirect,Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	//首页显示
	public function index()
	{
		return view('home/index');
	}

	//关于我 页面
	public function about()
	{
		return view('home/about');
	}

	//慢生活 页面
	public function news()
	{
		return view('home/news');
	}

	//慢生活 页面
	public function talk()
	{
		return view('home/talk');
	}

	//慢生活 页面
	public function learn()
	{
		return view('home/learn');
	}

	//慢生活 页面
	public function message()
	{
		return view('home/message');
	}
	
}



?>