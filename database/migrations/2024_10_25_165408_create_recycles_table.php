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
        Schema::create('recycles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('merk_id');
            $table->string("model");
            $table->string("kondisi");
            $table->foreignId("lokasi_id");
            $table->string("foto");
            $table->text("deskripsi");
            $table->string("estimasi");
            $table->string("status")->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recycles');
    }
};
