<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->id('id_tanggapan'); 
            
            $table->foreignId('id_pengaduan')
                  ->constrained('pengaduan', 'id_pengaduan')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
                  
            $table->foreignId('id_petugas')
                  ->constrained('petugas', 'id_petugas')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->date('tanggal_tanggapan');
            $table->text('isi_tanggapan');
            $table->enum('status_pengaduan', ['baru', 'diproses', 'selesai']);
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tanggapan');
    }
};