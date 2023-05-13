<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavBarsTable extends Migration
{

    public function up() 
    {
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('route');
            $table->integer('ordering')->default(0);
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('navbars');
    }
};
