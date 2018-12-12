<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relawans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->longText('image');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->date('waktu_masuk');
            $table->string('no_hp');
            $table->string('id_line');
            $table->string('file_cv');
            $table->string('role');
            $table->rememberToken();
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
        Schema::dropIfExists('relawans');
    }
}
