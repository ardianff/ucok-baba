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
        Schema::create('puskesmas', function (Blueprint $table) {
            $table->id();
            $table->string('puskesmas');
            $table->string('puskesmasClean');
            $table->string('kode_kc');
            $table->string('kode_kd')->nullable();
            $table->string('kode_p')->index();
            $table->string('alamat');
            $table->json('latlng');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puskesmas');
    }
};
