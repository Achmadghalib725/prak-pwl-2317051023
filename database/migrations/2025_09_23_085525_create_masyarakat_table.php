<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('masyarakat', function (Blueprint $table) {
            $table->id('id_masyarakat'); 
            $table->string('nik', 20)->unique();
            $table->string('nama', 100);
            $table->text('alamat');
            $table->string('no_hp', 15);
            $table->string('username', 50)->unique();
            $table->string('password', 100);
            $table->timestamps(); 
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('masyarakat');
    }
};