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
        Schema::create('translation_sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // oturumu başlatan kim
            $table->uuid('session_id');             // QR ile paylaşılan benzersiz kod
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translation_sessions');
    }
};
