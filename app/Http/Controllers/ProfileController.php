<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Payment;
use Auth;
use PDF;
use Validator;

class ProfileController extends Controller
{
    public function index()
	{
		$user = Auth::user();
		
		$payments = Payment::get_payments_from_user($user->id);
		$data['user'] = $user;
		$data['payments'] = $payments;
		
		return $this->front_view('profile.index', $data);
	}

	public function update(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
            'phone' => 'required'
			]);

		if($validator->fails()){
			return redirect(route('profile'))->withInput()->withErrors($validator);
		}
		$user = Auth::user();

		$user->email = $request->get('email');
		$user->phone = $request->get('phone');
		
		if($request->get('password') != null)
			$user->password = bcrypt($request->get('password'));

		$user->save();
		return redirect(route('profile'));
	}

	public function createPayment()
	{
		$payment = new Payment();
    	$data['payment'] = $payment;
    	$data['payment_types'] = array('DEPOSIT' => 'DEPOSITO', 'TRANSFERENCE' => 'TRASNFERENCIA');
    	return $this->front_view('profile.create-payment', $data);
	}

	public function downloadPDF($paymentId)
    {
        $payment = Payment::find($paymentId);
		$pdf = PDF::loadView('pdf.invoice', array('payment' => $payment));
		return $pdf->download('factura.pdf');
		  	
    }

    public function paymentDetail($paymentId)
	{
    	$payment = Payment::find($paymentId);
    	$data['payment'] = $payment;
    	return $this->front_view('profile.payment-detail', $data);
	}

	public function storePayment(Request $request) {
    	$user = Auth::user();
    	
    	dump($request->all());die;

    	$payment = new Payment();
    	$payment->bank = $request->input('bank');
    	$payment->date = $request->input('date');
    	$payment->type = $request->input('type');
    	$payment->confirmation_code = $request->input('confirmation_code');
    	$payment->amount = $request->input('amount');
    	$payment->note = $request->input('note');
    	$payment->status = "PENDING";
    	$payment->user_id = $user->id;
    	$payment->save();
    	return redirect(route('profile'));
    }

}
