<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cuentas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $curso=new Cuentas();
        $curso->monto="100.25";
        $curso->TipoDeCuenta="Ahorro";
        $curso->NumeroCuenta="2";
        $curso->save();

        $curso=new Cuentas();
        $curso->monto="200.30";
        $curso->TipoDeCuenta="Corriente";
        $curso->NumeroCuenta="2";
        $curso->save();

        $curso=new Cuentas();
        $curso->monto="800.30";
        $curso->TipoDeCuenta="Ahorro";
        $curso->NumeroCuenta="2";
        $curso->save();
        
    }
}
