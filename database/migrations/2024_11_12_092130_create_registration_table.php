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
        Schema::create('registration', function (Blueprint $table) {
            $table->id('registration_id');
            $table->bigInteger('team_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->date('registration_date');
            $table->string('registration_status');
            $table->string('payment_proof');
            $table->timestamps();
        
            // Foreign Keys
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign(columns: 'category_id')->references('category_id')->on('categories')->onDelete('cascade');

            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration');
    }
};
