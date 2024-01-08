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
        Schema::create('kantins', function (Blueprint $table) {
            $table->id();
            $table->string('kode_sekolah');
            $table->string('nama')->nullable();
            $table->string('pj')->nullable();
            $table->string('telp')->nullable();
            $table->string('email')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->date('terbit')->nullable();
            $table->date('berakhir')->nullable();
            $table->enum('status', ['Valid', 'Not Valid', 'Active', 'Inactive']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kantins');
    }
};
