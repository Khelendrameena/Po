<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::table('media_files', function (Blueprint $table): void {
            if (! Schema::hasIndex($table->getTable(), 'media_files_index')) {
                $table->index(['folder_id', 'user_id', 'created_at'], 'media_files_index');
            }
        });

        Schema::table('media_folders', function (Blueprint $table): void {
            if (! Schema::hasIndex($table->getTable(), 'media_folders_index')) {
                $table->index(['parent_id', 'user_id', 'created_at'], 'media_folders_index');
            }
        });
    }

    public function down(): void
    {
        Schema::table('media_files', function (Blueprint $table): void {
            $table->dropIndex('media_files_index');
        });

        Schema::table('media_folders', function (Blueprint $table): void {
            $table->dropIndex('media_folders_index');
        });
    }
};
