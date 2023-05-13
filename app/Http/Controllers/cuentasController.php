<?php

namespace App\Http\Controllers;
use App\Models\Cuentas;
use App\Models\Transacciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
 public function guardar_cuenta(Request $request)
 {
    $request->validate([
        'monto' => 'required|numeric',
        'tipo-cuenta' => 'required|string',
    ]);

    // Verificar que haya un usuario autenticado
    if (!Auth::check()) {
        return redirect('/login');
    }

    $cuenta = new Cuentas;
    $cuenta->monto = $request->input('monto');
    $cuenta->TipoDeCuenta = $request->input('tipo-cuenta');
    $cuenta->user_id = Auth::id(); // Asignar el ID del usuario autenticado
    //asumiendo que NumeroCuenta es un campo opcional que se llena en la base de datos
    $cuenta->save();
    return back();
 }
}
