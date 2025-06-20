<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lamarans', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('perusahaan');
        $table->string('tipe_pekerjaan');
        $table->string('pendidikan');
        $table->string('pengalaman');
        $table->string('level');
        $table->text('departemen'); 
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamarans');
    }
};
