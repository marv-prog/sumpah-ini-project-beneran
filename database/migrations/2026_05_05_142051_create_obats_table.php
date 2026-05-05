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
        $table->id(); // Ini otomatis jadi id_obat (PK)
        $table->string('nama_obat');
        $table->foreignId('kategori_id')->constrained('kategoris'); // FK ke tabel kategori
        $table->integer('harga_obat');
        $table->string('satuan');
        $table->integer('stok');
        $table->date('tanggal_exp');
        $table->timestamp('waktu_produksi');
        $table->timestamps(); // Mengatur created_at dan updated_at otomatis
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
