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
        Schema::create('members', function (Blueprint $table) {
            $table->id('member_id');
            $table->string('member_name');
            $table->enum('gender', ['male', 'female']);
            $table->date('birth_date');
            $table->string('position');
            $table->timestamps();
        
            $table->foreignId('team_id')->constrained('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
