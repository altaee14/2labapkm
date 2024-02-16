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
        Schema::create('message', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user_from');
            $table->unsignedBigInteger('id_user_to');
            $table->foreign('id_user_from')->references('id')->on('users');
            $table->foreign('id_user_to')->references('id')->on('users');
            $table->text('messageText');
            $table->boolean('private');
            $table->date('dateMessage');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message');
    }
};
