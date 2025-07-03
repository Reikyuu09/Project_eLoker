<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    protected $fillable = [
        'judul',
        'perusahaan',
        'tipe_pekerjaan',
        'pendidikan',
        'pengalaman',
        'level',
        'departemen',
        'img'
    ];
}

