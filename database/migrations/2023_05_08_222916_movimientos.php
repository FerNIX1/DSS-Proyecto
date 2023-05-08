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
        Schema::create('movimientos',function(Blueprint $table){
          $table->id();
          $table->string('monto');
          $table->string('FechaOperacion');
          $table->timestamp('NumeroCuenta')->nullable();
          $table->string('ID_Opecion');
          $table->string('ID_Movimeinto');
          $table->string('cuentas_NumeroCuenta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table');
    }
};
