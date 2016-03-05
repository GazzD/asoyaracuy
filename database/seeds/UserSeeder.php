<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i = 1; $i <= 10; ++$i){
	    	$user = new User();
			$user->balance = rand(-1000, 1000);
			$user->first_name = "Usuario $i";
			$user->last_name = "Usuario $i";
			$user->ci = "12345-$i";
			$user->email = "user-$i@mail.com";
			$user->phone = "0212-238-111$i";
			$user->last_name = "Usuario $i";
			$user->house = "Casa $i";
			$user->role = "USER";
			$user->password = "123456";
			$user->save();
    	}
    }
}
