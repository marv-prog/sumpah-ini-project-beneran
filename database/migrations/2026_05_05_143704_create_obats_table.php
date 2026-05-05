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
        Schema::create('obats', function (Blueprint $table) {
            $table->id(); // PK
            $table->string('nama_obat');
            $table->foreignId('kategori_id')->constrained('kategoris')->onDelete('cascade'); // FK
            $table->integer('harga_obat');
            $table->string('satuan');
            $table->integer('stok');
            $table->date('tanggal_exp');
            $table->timestamp('waktu_produksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obats');
    }
};
