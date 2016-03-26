<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Payment;
use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    protected function back_view($view, $data=array()){
    	return view('backend.'.$view, $data);
    }
    
    protected function front_view($view, $data=array()){
    	$user = User::find(1);
    	$data['user'] = $user;

    	return view('frontend.'.$view, $data);
    }
    
    protected function load_common_data(){
    	$payments_count = Payment::get_pending_payments_count();
    	$data = array(
    			'payments_count' => $payments_count
    	);
    	return $data;
    }
}
