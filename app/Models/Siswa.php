<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'datasiswas';

    protected $fillable = ['Id', 'nama', 'no_absen', 'jurusan', 'kelas', 'alamat'];
}