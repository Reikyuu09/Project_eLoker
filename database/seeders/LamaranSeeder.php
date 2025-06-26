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
    [
        'judul' => 'Sekretariat',
        'perusahaan' => 'PT. Cahaya Nusantara',
        'tipe_pekerjaan' => 'Shift / Full Time',
        'pendidikan' => 'SMA / SMK / STM',
        'skill_yang_dibutuhkan' => 'Komunikasi, Problem Solving, Microsoft Office',
        'level' => 'Staff / Officer',
        'departemen' => 'Customer Service',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'judul' => 'Ticketing Officer',
        'perusahaan' => 'PT. Kereta Api Indonesia',
        'tipe_pekerjaan' => 'Shift / Full Time',
        'pendidikan' => 'SMA / SMK / STM',
        'skill_yang_dibutuhkan' => 'Komunikasi, Problem Solving, Microsoft Office',
        'level' => 'Staff / Officer',
        'departemen' => 'Customer Service',
        'created_at' => now(),
        'updated_at' => now(),
    ],
      [
        'judul' => 'Operator Produksi',
        'perusahaan' => 'PT. Sinar Mutiara Cell',
        'tipe_pekerjaan' => 'Shift / Full Time',
        'pendidikan' => 'SMA / SMK / STM',
        'skill_yang_dibutuhkan' => 'Komunikasi, Problem Solving, Microsoft Office',
        'level' => 'Staff / Officer',
        'departemen' => 'Customer Service',
        'created_at' => now(),
        'updated_at' => now(),
    ],
     [
        'judul' => 'Finance & Accounting Staff',
        'perusahaan' => 'PT. Keuangan Mandiri',
        'tipe_pekerjaan' => 'Full Time',
        'pendidikan' => 'S1 Akuntansi / Manajemen Keuangan',
        'skill_yang_dibutuhkan' => 'Microsoft Excel, Accurate, Pembukuan',
        'level' => 'Staff / Officer',
        'departemen' => 'Keuangan',
        'created_at' => now(),
        'updated_at' => now(),
    ],
     [
        'judul' => 'Content Writer',
        'perusahaan' => 'PT. Kata Digital',
        'tipe_pekerjaan' => 'Part Time',
        'pendidikan' => 'Mahasiswa Ilmu Komunikasi / Sastra',
        'skill_yang_dibutuhkan' => 'Menulis, SEO Writing, Research',
        'level' => 'Staff / Officer',
        'departemen' => 'Content & Creative',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'judul' => 'Mobile App Developer',
        'perusahaan' => 'PT. Inovasi Mobile',
        'tipe_pekerjaan' => 'Full Time',
        'pendidikan' => 'S1 Teknik Informatika / Ilmu Komputer',
        'skill_yang_dibutuhkan' => 'Flutter, Kotlin, Dart, Firebase',
        'level' => 'Staff / Officer',
        'departemen' => 'Development',
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);

    }
}
