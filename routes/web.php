<?php

use App\Http\Controllers\Cliente;
use App\Http\Controllers\Entrenador;
use App\Http\Controllers\Gerente;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\GerenteController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ValoracionFisicaController;
use Illuminate\Support\Facades\Route;

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
    return view('paginaPrincipal');
});

Route::get('/login',[LoginController::class,'show'])->name('login.show');
Route::post('/login',[LoginController::class,'login'])->name('login.login');

Route::get('usuario/registrar', [UsuarioController::class, 'create'])->name('usuario.create');
Route::get('usuario/index', [UsuarioController::class, 'index'])->name('usuario.index');
Route::post('usuario/guardar', [UsuarioController::class, 'store'])->name('usuario.store');
Route::get('usuario/{usuario}/editar', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::put('usuario/{usuario}/actualizar', [UsuarioController::class, 'update'])->name('usuario.update');
Route::delete('usuario/{usuario}/eliminar', [UsuarioController::class, 'destroy'])->name('usuario.destroy');

Route::get('/gerente/index',[Gerente::class,'index'])->name('gerente.indexAdmin');
Route::get('/cliente/index',[Cliente::class,'index'])->name('cliente.indexCliente');
Route::get('/entrenador/index',[Entrenador::class,'index'])->name('entrenador.indexentrenador');

Route::get('mantenimiento/registrar', [MantenimientoController::class, 'create'])->name('mantenimiento.crear');
Route::get('mantenimiento/index', [MantenimientoController::class, 'index'])->name('mantenimiento.index');
Route::post('mantenimiento/guardar', [MantenimientoController::class, 'store'])->name('mantenimiento.store');
Route::get('mantenimiento/{mantenimiento}/editar', [MantenimientoController::class, 'edit'])->name('mantenimiento.edit');
Route::put('mantenimiento/{mantenimiento}/actualizar', [MantenimientoController::class, 'update'])->name('mantenimiento.update');
Route::delete('mantenimiento/{mantenimiento}/eliminar', [MantenimientoController::class, 'destroy'])->name('mantenimiento.destroy');


Route::get('valoracion_fisica/registrar',[ValoracionFisicaController::class, 'create'])->name('valoracion_fisica.create');
Route::get('valoracion_fisica/index', [ValoracionFisicaController::class, 'index'])->name('valoracion_fisica.index');
Route::post('valoracion_fisica/guardar', [ValoracionFisicaController::class, 'store'])->name('valoracion_fisica.store');
Route::get('valoracion_fisica/{valoracion_fisica}/editar', [ValoracionFisicaController::class, 'edit'])->name('valoracion_fisica.edit');
Route::put('valoracion_fisica/{valoracion_fisica}/actualizar', [ValoracionFisicaController::class, 'update'])->name('valoracion_fisica.update');
Route::delete('valoracion_fisica/{valoracion_fisica}/eliminar', [ValoracionFisicaController::class, 'destroy'])->name('valoracion_fisica.destroy');
