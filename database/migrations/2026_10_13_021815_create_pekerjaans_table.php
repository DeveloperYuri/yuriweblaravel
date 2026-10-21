<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pekerjaan', function (Blueprint $table) {
            $table->id();

            // 1. Informasi Utama Lowongan
            $table->string('title');                          // Judul Posisi
            $table->string('slug')->unique();                 // URL Friendly (cth: frontend-developer)
            $table->string('department');                     // Departemen (cth: Engineering)
            $table->enum('job_level', ['Entry-level', 'Junior', 'Mid-level', 'Senior', 'Manager']); // Level
            $table->enum('employment_type', ['Full-time', 'Part-time', 'Contract', 'Internship']); // Status Kerja
            $table->enum('work_location_type', ['On-site', 'Remote', 'Hybrid']); // Sistem Kerja
            $table->string('location')->nullable();           // Lokasi (cth: Jakarta Selatan)

            // 2. Isi & Persyaratan Pekerjaan
            $table->text('description');                      // Deskripsi Pekerjaan
            $table->text('responsibilities');                 // Tanggung Jawab Utama
            $table->text('requirements');                     // Kualifikasi & Persyaratan
            $table->text('nice_to_have')->nullable();         // Kualifikasi tambahan / opsional

            // 3. Kompensasi & Benefit
            $table->decimal('salary_min', 12, 2)->nullable(); // Gaji Minimum
            $table->decimal('salary_max', 12, 2)->nullable(); // Gaji Maksimum
            $table->boolean('show_salary')->default(false);   // Apakah gaji ditampilkan ke publik?
            $table->text('benefits')->nullable();             // Tunjangan & Fasilitas

            // 4. Pengaturan & Status
            $table->date('deadline_at')->nullable();          // Batas Akhir Pendaftaran
            $table->enum('status', ['Draft', 'Active', 'Closed'])->default('Draft'); // Status Lowongan
            $table->string('apply_url_or_email')->nullable(); // Link form atau email tujuan lamaran

            $table->timestamps();                             // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
