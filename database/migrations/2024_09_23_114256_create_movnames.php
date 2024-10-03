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
        Schema::create('movnames', function (Blueprint $table) {
            $table->id();
            $table->string('poster');
            $table->string('title');
            $table->string('year');
            $table->string('genre');
            $table->string('actors');
            $table->string('director');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movnames');
    }
};
