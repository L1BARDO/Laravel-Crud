<?php

use App\Mail\EmailCallReceived;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CuentaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    // Redirige la ruta raíz al listado de cuentas
    return redirect()->route('cuentas.index');
});
Route::resource('cuentas', CuentaController::class);
Route::get('/cuentas/search', 'CuentaController@show');


Route::post('/send', [ContactoController::class, 'send'])->name('send.email');
