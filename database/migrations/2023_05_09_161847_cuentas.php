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
        Schema::create('cuentas',function(Blueprint $table){
            $table->id();
            $table->decimal('monto', 10, 2); 
            $table->string('TipoDeCuenta');
            $table->string('NumeroCuenta')->nullable();
            $table->unsignedBigInteger('user_id'); // Agregar esta línea
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Agregar esta línea
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuentas');
    }
};
