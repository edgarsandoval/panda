<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth',['only' => 'admin']);
	}

	public function index()
	{
		return view('home');
	}

	public function admin()
	{
		return view('admin');
	}
}
