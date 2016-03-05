<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = User::all();
    	$banks = array('Mercantil', 'Banesco', 'Banco de Venezuela');
    	foreach ($users as $user) {
	    	for ($i = 1; $i <= 10; ++$i){
		    	$payment = new Payment();
				$payment->amount = rand(0, 1000);
				$payment->bank = $banks[rand(0, count($banks)-1)];
				$payment->confirmation_code = "123456 $i";
				$payment->date = "2016-01-01 00:00:00";
				$payment->note = "No estoy de acuerdo :(";
				$payment->type = "DEPOSIT";
				$payment->status = "PENDING";
				$payment->user_id = $user->id;
				$payment->save();
	    	}
    	}
    }
}
