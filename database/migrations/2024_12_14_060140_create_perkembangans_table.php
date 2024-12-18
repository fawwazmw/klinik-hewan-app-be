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
        Schema::create('perkembangan', function (Blueprint $table) {
            $table->id('id_perkembangan'); // Primary key
            $table->unsignedBigInteger('hewan_id');
            $table->foreign('hewan_id')->references('id')->on('hewan')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tanggal'); // Tanggal perkembangan
            $table->decimal('berat_badan', 8, 2); // Berat badan
            $table->decimal('tinggi', 8, 2); // Tinggi badan
            $table->string('foto')->nullable(); // Path ke file foto
            $table->text('catatan')->nullable(); // Catatan tambahan
            $table->timestamps(); // Kolom created_at dan updated_at

            // Relasi ke tabel hewan
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkembangans');
    }
};
