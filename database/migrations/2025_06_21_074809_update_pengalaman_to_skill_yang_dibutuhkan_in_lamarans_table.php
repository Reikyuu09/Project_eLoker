<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('lamarans', function (Blueprint $table) {
            $table->dropColumn('pengalaman');
            $table->string('skill_yang_dibutuhkan')->nullable()->after('pendidikan');
        });
    }

    public function down(): void
    {
        Schema::table('lamarans', function (Blueprint $table) {
            $table->dropColumn('skill_yang_dibutuhkan');
            $table->string('pengalaman')->nullable()->after('pendidikan');
        });
    }
};

