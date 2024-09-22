<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fragen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('schwierigkeiten_id');
            $table->foreignId('kategorien_id');
            $table->string('frage');
            $table->boolean('freigegeben')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fragen');
    }
};
