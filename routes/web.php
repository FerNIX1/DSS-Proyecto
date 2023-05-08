<?php

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
    return view('login');
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
