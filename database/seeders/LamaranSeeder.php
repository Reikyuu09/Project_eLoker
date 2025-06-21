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
    [
        'judul' => 'Software Engineer',
        'perusahaan' => 'PT. Maju Mundur',
        'tipe_pekerjaan' => 'Full Time',
        'pendidikan' => 'SMA / SMK / STM',
        'skill_yang_dibutuhkan' => 'PHP, Laravel, MySQL',
        'level' => 'Staff / Officer',
        'departemen' => 'IT',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'judul' => 'UI/UX Designer',
        'perusahaan' => 'PT. Desain Indah',
        'tipe_pekerjaan' => 'Freelance',
        'pendidikan' => 'Mahasiswa teknik informatika',
        'skill_yang_dibutuhkan' => 'Figma, Adobe XD, Prototyping',
        'level' => 'Staff / Officer',
        'departemen' => 'Desain',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'judul' => 'Digital Marketing Specialist',
        'perusahaan' => 'PT. Promosi Jaya',
        'tipe_pekerjaan' => 'Full Time',
        'pendidikan' => 'Mahasiswa teknik informatika',
        'skill_yang_dibutuhkan' => 'SEO, SEM, Google Ads, Meta Ads',
        'level' => 'Supervisor',
        'departemen' => 'Marketing',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'judul' => 'Network Administrator',
        'perusahaan' => 'PT. Teknologi Nusantara',
        'tipe_pekerjaan' => 'Contract',
        'pendidikan' => 'Mahasiswa teknik informatika',
        'skill_yang_dibutuhkan' => 'Networking, Mikrotik, Cisco',
        'level' => 'Staff / Officer',
        'departemen' => 'IT Support',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'judul' => 'Data Analyst',
        'perusahaan' => 'PT. Analisa Data Cepat',
        'tipe_pekerjaan' => 'Full Time',
        'pendidikan' => 'Mahasiswa teknik informatika',
        'skill_yang_dibutuhkan' => 'Python, SQL, Excel, Tableau',
        'level' => 'Staff / Officer',
        'departemen' => 'Business Intelligence',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'judul' => 'Customer Service Representative',
        'perusahaan' => 'PT. Layanan Prima',
        'tipe_pekerjaan' => 'Shift / Full Time',
        'pendidikan' => 'SMA / SMK / STM',
        'skill_yang_dibutuhkan' => 'Komunikasi, Problem Solving, Microsoft Office',
        'level' => 'Staff / Officer',
        'departemen' => 'Customer Service',
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);

    }
}
