<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BackendController extends Controller
{

	public function __construct()
	{
		if(Auth::user()->role == 'USER') return redirect(route('home'));
	}

	public function index(){
		
		$data = $this->load_common_data();
		
		return $this->back_view('home.index', $data);
	}
	
	public function login(){
	
		return $this->back_view('users.login');
	}
	
	public function test(){
	
		return $this->back_view('test');
	}
	
}
