<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SitioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComentariosController;
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
Auth::routes();
Route::resource('sitio', SitioController::class);

//Pagina principal
Route::get('/', function () {return view('welcome');});

//Perfil del usuario
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Listar sitios
Route::get('/sitio', [SitioController::class, 'index'])->name('sitios.index');

//Guardar sitios
Route::post('/sitio', [SitioController::class, 'store'])->name('sitios.store');

//Crear sitios
Route::get('/sitio/create', [SitioController::class, 'create'])->name('sitios.create')->middleware('auth');

//Editar sitios
Route::get('/sitio/edit/{sitio}', [SitioController::class, 'edit'])->name('sitios.edit');

//Update sitio
Route::put('/sitio/update/{sitio}', [SitioController::class, 'update'])->name('sitios.update');

//Filtro per tipo
Route::get('/tipo', [SitioController::class, 'filtro'])->name('sitios.filtro');

//Filtro por nombre
Route::get('/nombre', [SitioController::class, 'nombre'])->name('sitios.nombre');

//Vista individual
Route::get('/sitio/{sitio}', [SitioController::class, 'individual'])->name('sitios.individual');

//Lisatr sitios creados por ti
Route::get('/missitio', [SitioController::class, 'misSitios'])->name('sitios.missitios')->middleware('auth');

//Cambiar password
Route::get('/changepass', [UserController::class, 'changePass'])->name('user.changePass');

//Update info del usuario
Route::post('/edit/pass', [UserController::class, 'updatePass'])->name('user.updatePass');
Route::post('/edit/name', [UserController::class, 'updateName'])->name('user.updateName');
Route::post('/edit/email', [UserController::class, 'updateEmail'])->name('user.updateEmail');

//Pagina de contacto
Route::get('/contacto', [SitioController::class, 'contacto'])->name('contacto');

//Guardar comentarios
Route::post('/sitio/comentario/{sitio}', [ComentariosController::class, 'store'])->name('comentarios.store')->middleware('auth');

Route::get('/cmd/{command}',function($command){
    Artisan::call($command);
    dd(Artisan::output());
});