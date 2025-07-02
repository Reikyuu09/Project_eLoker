<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('lamarans', function (Blueprint $table) {
            $table->id()->first();
            $table->text('skill_yang_dibutuhkan')->nullable();
            $table->string('img')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::table('lamarans', function (Blueprint $table) {
            $table->dropColumn(['skill_yang_dibutuhkan', 'img']);
            $table->dropTimestamps();
            $table->dropColumn('id');
        });
    }
};
