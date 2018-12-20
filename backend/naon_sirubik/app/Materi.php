<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $fillable = [
        'id', 'id_uploader', 'mata_pelajaran', 'kelas', 'nama_materi', 'file_materi', 'deskripsi', 'created_at', 'updated_at',
    ];
}
