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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            //
            $table->enum('kategori',['mahasiswa','non mahasiswa']);
            $table->string('kampus')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('nim')->nullable();
            $table->enum('jenjang',['D1','D3','S1/D4','S2','S3'])->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('alamat');
            $table->string('telepon');
            $table->string('nik');
            $table->string('instansi')->nullable();
            $table->string('sponsor_riset')->nullable();
            $table->string('npwp')->nullable();
            //
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
