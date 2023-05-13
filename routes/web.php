<?php

use App\Http\Controllers\CajeroController;
use App\Http\Controllers\cuentasController;
use Illuminate\Support\Facades\Route;


// ====================================
use App\Http\Controllers\loginController;
// ====================================

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin');
});


Route::view('/login',"login")->name('login');

Route::view('/registro',"register")->name('registro');

Route::view('/privada',"secret")->middleware('auth')->name('privada');


// ===================despues veo esto==========================
Route::view('/privada1',"admin")->middleware('auth')->name('admin');
// Route::view('/privada',"secret")->middleware('auth')->name('admin');
// ================================================================


Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');

Route::post('/inicia-sesion',[LoginController::class,'login'])->name('inicia-sesion');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/ver-cuenta/{id}',[cuentasController::class,'vercuenta'])->name('ver-cuenta');

Route::get('/Crearcuenta',[cuentasController::class,'Crear_cuenta'])->name('Crearcuenta');

Route::post('/guardar-cuenta', [CuentasController::class, 'guardar_cuenta'])->name('guardar-cuenta');

Route::post('/cajero/ingresar-cliente', [CajeroController::class, 'ingresarCliente'])->name('cajero.ingresar-cliente');

Route::post('/validar-Usuarios-admin',[LoginController::class,'registeradmin'])->name('validar-Usuarios-admin');

