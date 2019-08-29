<?php

use Illuminate\Database\Seeder;
use App\user;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        for ($i=1; $i < 4; $i++) { 
	    	User::create([
	            'name' => str_random(8),
	            'email' => str_random(12).'@mail.com',
	            'password' => bcrypt('123456'),
	            'roll_id' => $i

	        ]);
    	}
    }
}
