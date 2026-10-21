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
        Schema::create('lamaran_pekerjaans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pekerjaan_id')
                ->constrained('pekerjaan')
                ->restrictOnDelete();

            $table->string('nama', 150);
            $table->string('email', 255);
            $table->string('cv_path');

            $table->string('status', 30)->default('Submitted');
            $table->text('catatan_hr')->nullable();

            $table->timestamps();

            $table->index(['pekerjaan_id', 'status']);
            $table->index('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamaran_pekerjaans');
    }
};
