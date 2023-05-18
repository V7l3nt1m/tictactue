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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player1_id');
            $table->foreign('player1_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('player2_id');
            $table->foreign('player2_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('winner')->nullable();
            $table->foreign('winner')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('looser')->nullable();
            $table->foreign('looser')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
