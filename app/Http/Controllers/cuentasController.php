<?php

namespace App\Http\Controllers;
use App\Models\Cuentas;
use App\Models\Transacciones;
use Illuminate\Http\Request;

class cuentasController extends Controller
{
    public function vercuenta(int $id)
{
    $cuentas = Cuentas::where("user_id",$id)->get();
    $transacciones=Transacciones::All();
    //dd($transacciones);
    //dd($cuentas);
    return view('cuentas', compact('cuentas','transacciones'));
}

 public function Crear_cuenta()
{
    return view('crearCuenta');
}
}
