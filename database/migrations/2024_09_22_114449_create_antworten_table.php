<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('antworten', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fragen_id');
            $table->string('antwort');
            $table->boolean('richtig');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('antworten');
    }
};
