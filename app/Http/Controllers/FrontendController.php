<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
	public function index(){
	
		return $this->front_view('home.index');
	}
}