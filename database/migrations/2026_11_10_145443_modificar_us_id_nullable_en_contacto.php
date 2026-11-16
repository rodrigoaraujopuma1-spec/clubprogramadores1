<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contacto', function (Blueprint $table) {
            $table->dropForeign(['us_id']);

            $table->unsignedBigInteger('us_id')->nullable()->change();

            $table->foreign('us_id')
                  ->references('us_id')
                  ->on('usuario')
                  ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('contacto', function (Blueprint $table) {
            $table->dropForeign(['us_id']);

            $table->unsignedBigInteger('us_id')->nullable(false)->change();

            $table->foreign('us_id')
                  ->references('us_id')
                  ->on('usuario');
        });
    }
};
