<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);

        Schema::create('relawan', function (Blueprint $table) {
            $table->increments('id_relawan');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('pas_foto');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->date('waktu_masuk');
            $table->string('no_hp');
            $table->string('id_line');
            $table->string('role');
        });

        Schema::create('pengurus', function (Blueprint $table) {
            $table->increments('id_pengurus');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('pas_foto');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->date('waktu_masuk');
            $table->string('no_hp');
            $table->string('id_line');
            $table->string('role');
        });


        Schema::create('lamaran', function (Blueprint $table) {
            $table->increments('id_lamaran');
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->string('pas_foto');
            $table->string('tempat_lahir');
            $table->string('no_hp');
            $table->string('id_line');
            $table->string('alasan_masuk');
        });

        Schema::create('jadwal', function (Blueprint $table) {
            $table->increments('id_jadwal');
            $table->string('id_mata_pelajaran');
            $table->string('tempat');
            $table->time('waktu');
            $table->timestamps();
        });

        Schema::create('mata_pelajaran', function (Blueprint $table) {
            $table->increments('id_mata_pelajaran');
            $table->timestamps();
        });
        
        Schema::create('materi', function (Blueprint $table) {
            $table->increments('id_materi');
            $table->string('materi');
            $table->timestamps();
        });

        Schema::create('pesan', function (Blueprint $table) {
            $table->increments('id_pesan');
            $table->string('signature');
            $table->string('id_pengguna_recv');
            $table->string('id_pengguna_send');
            $table->string('isi_pesan');
            $table->timestamps();
        });


        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
