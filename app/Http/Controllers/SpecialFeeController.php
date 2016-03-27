<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Payment;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class SpecialFeeController extends Controller
{
    public function index() {
    	$data = $this->load_common_data();
    	$specialPayments = SpecialFee::all();
    	$data['payments'] = $specialFee;
    	return $this->back_view('specialfee.list', $data);
    }
    
    public function create() {
    	return $this->back_view('specialfee.create');
    }
    
    public function store(Request $request) {
    	$user = Auth::user();
    	
    	$fee = new SpecialFee();
    	$fee->user_id = $request->input('user_id');
    	$fee->amount = $request->input('amount');
    	$fee->status = "ENABLED";
       	$fee->save();
   
    	return redirect(route('profile'));
    }
    
    public function detail($id) {
    	$data = $this->load_common_data();
    	$payment = Payment::find($id);
    	$data['payment'] = $payment;
    	return $this->back_view('payments.detail', $data);
    }
    
    public function approve($id) {
    	$data = $this->load_common_data();
        // Approve payment
    	$payment = Payment::approve($id);

        // Update balance
        $user = User::find($payment->user_id);
        $user->balance -= $payment->amount;
        $user->save();

    	return redirect()->route('admin.payments');
    }
    
    public function reject($id) {
    	$data = $this->load_common_data();
    	$payment = Payment::reject($id);
    	return redirect()->route('admin.payments');
    }
    
}
