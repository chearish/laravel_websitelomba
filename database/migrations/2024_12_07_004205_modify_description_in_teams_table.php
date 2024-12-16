<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->text('description')->change(); // Change the column to TEXT
        });
    }

    public function down()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->string('description', 255)->change(); // Revert back to the original length
        });
    }

};
