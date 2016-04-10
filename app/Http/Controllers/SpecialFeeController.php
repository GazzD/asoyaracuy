<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Payment;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\SpecialFee;

class SpecialFeeController extends Controller
{
    public function index() {
    	$data = $this->load_common_data();
    	$specialFees = SpecialFee::where('status','ENABLED')->get();
    	$data['specialFees'] = $specialFees;
    	return $this->back_view('specialfee.list', $data);
    }
    
    public function create() {
    	return $this->back_view('specialfee.create');
    }
    
    public function store(Request $request) {
    	$user = Auth::user();
    	$id = $request->input('user_id');
    	$oldFee = SpecialFee::where('user_id',$id)->where('status','ENABLED')->first();
    	var_dump($oldFee);die;
    	if($oldFee != null){
    		$oldFee->status = 'DISABLED';
    		$oldFee->save();	
    	}
    	$fee = new SpecialFee();
    	$fee->user_id = $request->input('user_id');
    	$fee->amount = $request->input('amount');
    	$fee->status = "ENABLED";
       	$fee->save();
   
    	return redirect(route('admin'));
    }
    
    public function delete($id){
    	$specialFee = SpecialFee::find($id);
    	$specialFee->delete();

		return redirect(route('admin'));		
	}
}	
