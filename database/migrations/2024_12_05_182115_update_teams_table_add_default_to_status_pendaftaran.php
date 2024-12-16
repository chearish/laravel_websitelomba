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
        Schema::table('teams', function (Blueprint $table) {
            $table->string('status_pendaftaran')->default('pending')->change();
        });
    }
    
    public function down(): void
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->integer('status_pendaftaran')->change();
        });
    }
};
