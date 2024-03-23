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
            $table->date('tanggalfaktur');
            $table->foreignId('suplayer_id');
            $table->foreignId('namabarang');
            $table->foreignId('stok_id');
            $table->string('hargabeli');
            $table->string('jumlah');
            $table->string('cabang');
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
