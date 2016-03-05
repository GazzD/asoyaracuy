<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model {
	
	public static function approve($id) {
		$payment = Payment::find($id);
		$payment->status = "APPROVED";
		$payment->save();
		
	}
	
	public static function get_pending_payments_count() {
		$payments = Payment::where('status', '=', 'PENDING')->get();
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
