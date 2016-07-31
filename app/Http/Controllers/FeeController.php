<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FeeController extends Controller
{
        public function index() {
    	$data = $this->load_common_data();
    	$Fee = Fee::where('status','ENABLED')->find();
    	$data['Fee'] = $Fee;
    	return $this->back_view('fee.index', $data);
    }
    
    public function create() {
    	return $this->back_view('fee.create');
    }
    
    public function store(Request $request) {
    	$user = Auth::user();
    	$id = $request->input('user_id');
    	$oldFee = Fee::where('status','ENABLED')->find();
    	if($oldFee != null){
    		$oldFee->status = 'DISABLED';
    		$oldFee->save();	
    	}
    	$fee = new Fee();
    	$fee->amount = $request->input('amount');
    	$fee->status = "ENABLED";
       	$fee->save();
   
    	return redirect(route('admin'));
    }
    
    public function delete($id){
		//
	}

	public function collect(){
		$loggedUser = Auth::user();
		$fee = Fee::where('status','ENABLED')->find();
		$specialFees = SpecialFee::where('status','ENABLED');
		$users = User::where('role','USER')->get();
		foreach($users as $user){
			$amount = $fee->amount;
			foreach($specialFees as $specialFee){
				if($specialFee->user_id == $user->id){
					$amount = $specialFee->amount;
				}
			}

			$user->balance = $user->balance - $amount;
			$user->save();
		}	


	}
}
