<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IsiLamaran extends Model
{
    protected $table = 'isi_lamarans';
    protected $fillable = [
        'nama', 'email', 'no_hp', 'jurusan', 'posisi', 'cv'
    ];
}
