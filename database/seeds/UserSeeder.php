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
    	$roles = ['USER', 'ADMIN', 'DIRECTIVE', 'COLLECTOR'];
    	$user = new User();
		$user->balance = rand(-1000, 1000);
		$user->email = "choroni@mail.com";
		$user->phone = "0212-235-1434";
		$user->house = "Choroni";
		$user->role = 'ADMIN';
		$user->password = bcrypt('123456');
		$user->status = 'ENABLED';
		$user->save();
			
    	for ($i = 1; $i <= 10; ++$i){
	    	$user = new User();
			$user->balance = rand(-1000, 1000);
			$user->email = "user-$i@mail.com";
			$user->phone = "0212-238-111$i";
			$user->house = "Casa $i";
			$user->role = $roles[rand(0,3)];
			$user->password = bcrypt('123456');
			$user->status = 'ENABLED';
			$user->save();
    	}
    }
}
