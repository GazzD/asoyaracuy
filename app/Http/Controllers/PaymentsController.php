<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Payment;
use Illuminate\Http\Request;
use App\User;
use Auth;

class PaymentsController extends Controllers
{
    public function __construct()
    {
        if(Auth::user()->role == 'USER') return redirect(route('home'));
    }

    public function index() {
    	$data = $this->load_common_data();
    	$payments = Payment::where('user_status','ENABLED')->get();
    	$data['payments'] = $payments;
    	return $this->back_view('payments.list', $data);
    }
    
    public function create() {
    	$payment = new Payment();
    	$data['payment'] = $payment;
    	$data['payment_types'] = array('DEPOSIT' => 'DEPOSITO', 'TRANSFERENCE' => 'TRASNFERENCIA', 'CASH' => 'EFECTIVO');
    	return $this->front_view('payments.create', $data);
    }
    
    public function store(Request $request) {
    	$user = Auth::user();
        dump($request->all());die;
        $payment = new Payment();
        $payment->bank = $request->input('bank');
        $payment->type = $request->input('type');
        $payment->confirmation_code = $request->input('confirmation_code');
        $payment->amount = $request->input('amount');
        $payment->note = $request->input('note');
        $payment->status = "PENDING";
        $payment->user_id = $user->id;
        $payment->user_status = $user->status;
        $payment->house = $user->house;
        $payment->save();
        
    	return redirect('profile');
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
