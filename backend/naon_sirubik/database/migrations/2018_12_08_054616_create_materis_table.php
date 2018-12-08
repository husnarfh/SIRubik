<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {    
        Schema::create('materis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_uploader');
            $table->string('mata_pelajaran');
            $table->string('kelas');
            $table->string('file_materi');
            $table->string('deskripsi');
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
        Schema::dropIfExists('materis');
    }
}
