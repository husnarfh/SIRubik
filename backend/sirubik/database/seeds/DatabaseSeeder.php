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

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {    
    	$this->call(admin::class);
    	$this->call(relawan::class);
    	$this->call(useradminseed::class);
    
    }
}
