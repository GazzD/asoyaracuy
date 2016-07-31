<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Payment;

class BackendController extends Controller
{

	public function __construct()
	{
		if(Auth::user()->role == 'USER') return redirect(route('home'));
	}

	public function index(){
		
		$data = $this->load_common_data();
		$usersCount = User::where('status', '=', 'ENABLED')->count();
		$totalFunding = Payment::get_all_money_collected();
		$debtorsCount = User::getDebtors();

		$data['debtorsCount'] = $debtorsCount;
		$data['usersCount'] = $usersCount;
		$data['totalFunding'] = $totalFunding;
		return $this->back_view('home.index', $data);
	}
	
	public function login(){
	
		return $this->back_view('users.login');
	}
	
	public function test(){
	
		return $this->back_view('test');
	}
	
}
