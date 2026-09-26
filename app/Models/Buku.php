<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'databuku';

    protected $fillable = ['id', 'judul', 'penulis', 'tahun_terbit', 'stok'];
}
