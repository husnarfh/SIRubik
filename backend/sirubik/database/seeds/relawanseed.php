<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Admin;
use App\Calon_relawan;
use App\Relawan;
use App\Jadwal;
use App\Materi;
use App\Pesan;
use App\Mata_pelajaran;
use App\Pengurus;

class relawanseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //         Schema::create('relawans', function (Blueprint $table) {
        //     $table->increments('id_relawan');
        //     $table->string('email')->unique();
        //     $table->string('password');
        //     $table->string('nama_lengkap');
        //     $table->string('alamat');
        //     $table->string('image');
        //     $table->string('tempat_lahir');
        //     $table->string('tanggal_lahir');
        //     $table->string('waktu_masuk');
        //     $table->string('no_hp');
        //     $table->string('id_line');
        //     $table->string('file_cv');
        //     $table->string('role');
        //     $table->timestamps();
        // });
        Relawan::insert([
    		[
    			'email'			=> 'husnarfh@gmail.com',
    			'password'		=> Hash::make("admina"),
                'nama_lengkap' => "husna nurarifah",
                'alamat' => "cibanteng",
                'tempat_lahir' => "01/01/1998",
                'tanggal_lahir' => "01/01/1998",
                'waktu_masuk' => "01/01/1998",
                'no_hp' => "08123456789",
                'file_cv' => "dummy_cv.pdf",
                'role' => "knight",
                'id_line' => "husnarfh",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
 
            ],
            [
    			'email'			=> 'husnarfh@gmail.com',
    			'password'		=> Hash::make("admina"),
                'nama_lengkap' => "husna nurarifah",
                'alamat' => "cibanteng",
                'tempat_lahir' => "01/01/1998",
                'tanggal_lahir' => "01/01/1998",
                'waktu_masuk' => "01/01/1998",
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
                'tempat_lahir' => "01/01/1998",
                'tanggal_lahir' => "01/01/1998",
                'waktu_masuk' => "01/01/1998",
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
