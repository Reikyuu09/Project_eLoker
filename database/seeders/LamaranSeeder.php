<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LamaranSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('lamarans')->insert([
            'judul' => 'Sales Executive',
            'perusahaan' => 'PT. Maju Mundur',
            'tipe_pekerjaan' => 'Full Time',
            'pendidikan' => 'SMA / SMK / STM',
            'pengalaman' => '1-2 Tahun',
            'level' => 'Staff / Officer',
            'departemen' => 'Penjualan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
