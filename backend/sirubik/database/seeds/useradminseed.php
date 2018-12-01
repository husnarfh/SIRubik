<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Admin;
use App\Calon_relawan;
use App\Jadwal;
use App\Materi;
use App\Pesan;
use App\Mata_pelajaran;
use App\Pengurus;

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
