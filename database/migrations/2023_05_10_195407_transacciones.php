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
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id();
            $table->decimal('monto', 10, 2);
            $table->string('tipo');
            $table->unsignedBigInteger('cuenta_id');
            $table->timestamps();
            $table->foreign('cuenta_id')->references('id')->on('cuentas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacciones');
    }
};
