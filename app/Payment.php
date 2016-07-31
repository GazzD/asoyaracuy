<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model {

	public function User()
    {
        return $this->belongsTo('App\User');
    }
	
	public static function approve ($id) 
	{
		$payment = Payment::find($id);
		$payment->status = "APPROVED";
		$payment->save();
		return $payment;
		
	}
	
	public static function get_all_money_collected() {
		$total = DB::table('payments')
                ->where('status', 'APPROVED')
                ->sum('amount');
        return $total;
	}

	public static function get_pending_payments_count() {
		$payments = Payment::where('status', '=', 'PENDING')->where('user_status','ENABLED')->get();
		return count($payments);
	}
	
	public static function get_payments_from_user($id) {
		$payments = Payment::where( 'user_id', '=', $id )->get();
		return $payments;
	}
	
	public static function reject($id) {
		$payment = Payment::find($id);
		$payment->status = "REJECTED";
		$payment->save();
	
	}

}
