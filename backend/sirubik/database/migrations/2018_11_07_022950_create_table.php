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

        Schema::create('relawan', function (Blueprint $table) {
            $table->increments('id_relawan');
            $table->string('email');
            $table->string('password');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->date('waktu_masuk');
            $table->string('no_hp');
            $table->string('id_line');
            $table->string('role');
        });

        Schema::create('pengurus', function (Blueprint $table) {
            $table->increments('id_pengurus');
            $table->string('email');
            $table->string('password');
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
            $table->timestamps();
            
        });

        Schema::create('jadwal', function (Blueprint $table) {
            $table->increments('id_jadwal');
            $table->string('id_mata_pelajaran');
            $table->time('waktu');
            $table->timestamps();
        });

        Schema::create('mata_pelajaran', function (Blueprint $table) {
            $table->increments('id_mata_pelajaran');
            $table->timestamps();
        });
        
        Schema::create('materi', function (Blueprint $table) {
            $table->increments('id_materi');
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
