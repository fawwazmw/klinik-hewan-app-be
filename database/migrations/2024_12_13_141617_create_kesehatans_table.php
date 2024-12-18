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
        Schema::create('kesehatan', function (Blueprint $table) {
            $table->id(); // Kolom ID sebagai primary key
            $table->unsignedBigInteger('hewan_id');
            $table->foreign('hewan_id')->references('id')->on('hewan')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tanggal');
            $table->string('gejala');
            $table->string('diagnosis');
            $table->string('tindakan');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatan');
    }
};
