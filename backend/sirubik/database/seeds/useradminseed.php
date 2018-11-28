<?php

use Illuminate\Database\Seeder;
use App\User;

class adminseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	User::insert([
    		[
    			'email'			=> 'admin@gmail.com',
    			'password'		=> Hash::make("admina"),
    		]
    	]);
    }
}
