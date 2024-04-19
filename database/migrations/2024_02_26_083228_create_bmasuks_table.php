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
        Schema::create('bmasuks', function (Blueprint $table) {
            $table->id();
            $table->date('tglfktr');
            $table->foreignId('suplayer_id');
            $table->foreignId('stok_id');
            $table->string('hargabeli');
            $table->string('jumlahbm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bmasuks');
    }
};
