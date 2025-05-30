<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::table('re_consults', function (Blueprint $table): void {
            $table->string('email', 60)->nullable()->change();
            $table->string('phone', 60)->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('re_consults', function (Blueprint $table): void {
            $table->string('email', 60)->change();
            $table->string('phone', 60)->change();
        });
    }
};
