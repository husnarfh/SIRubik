<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Relawan;
// use App\Admin;
// use App\Calon_relawan;
// use App\Relawan;
// use App\Jadwal;
// use App\Materi;
// use App\Pesan;
// use App\Mata_pelajaran;
// use App\Pengurus;

class relawanseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Relawan::insert([
    		[
    			'email'			=> 'husnarfh@gmail.com',
    			'password'		=> Hash::make("admina"),
                'nama_lengkap' => "husna nurarifah",
                'alamat' => "cibanteng",
                'image' => 'anonimus.jpg',
                'tempat_lahir' => "sumedeang",
                'tanggal_lahir' => "1998-01-01",
                'waktu_masuk' => "1998-01-01",
                'no_hp' => "08123456789",
                'file_cv' => "dummy_cv.pdf",
                'role' => "knight",
                'id_line' => "husnarfh",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
 
            ],[
    			'email'			=> 'alfakatsuki@gmail.com',
    			'password'		=> Hash::make("admina"),
                'nama_lengkap' => "alfan",
                'alamat' => "cibanteng",
                'image' => 'anonimus.jpg',
                'tempat_lahir' => "jakarta",
                'tanggal_lahir' => "1998-01-01",
                'waktu_masuk' => "1998-01-01",
                'no_hp' => "08123456789",
                'file_cv' => "dummy_cv.pdf",
                'role' => "knight",
                'id_line' => "res23tri",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
    			'email'			=> 'okimonoki@gmail.com',
    			'password'		=> Hash::make("admina"),
                'nama_lengkap' => "ahmad syauqi",
                'alamat' => "cibanteng",
                'image' => 'anonimus.jpg',
                'tempat_lahir' => "jakarta",
                'tanggal_lahir' => "1998-01-01",
                'waktu_masuk' => "1998-01-01",
                'no_hp' => "08123456789",
                'file_cv' => "dummy_cv.pdf",
                'role' => "knight",
                'id_line' => "okimonoki",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
            
            
        ]);
        
        
    }
}
