<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmprendimientoController;
use App\Http\Controllers\EmpleoController;
use App\Http\Controllers\BuzonController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\PerfilesController;
use App\Http\Controllers\PublicacioneController;
use App\Http\Controllers\InversionistaController;
use App\Http\Controllers\NotificacioneController;
use App\Http\Controllers\ReaccioneController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;


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


// home

Route::get('/', HomeController::class)-> name('home');

Route::get('panel', [HomeController::class, 'panel']) ->name('home.panel');

Route::get('principal', [HomeController::class, 'principal']) ->name('home.principal');

Route::get('prueba', [HomeController::class, 'prueba']);



// Resource

Route::resource('emprendimientos', EmprendimientoController::class);

Route::resource('buzons', BuzonController::class);

//Route::resource('users', UserController::class);

//Route::resource('empleos', EmpleoController::class);

//Route::resource('inversionistas', InversionistaController::class);



//Usuarios

Route::get('users', [UserController::class, 'index']) ->name('users.index');

Route::get('users/create', [UserController::class, 'create']) ->name('users.create');

Route::post('users', [UserController::class, 'store']) ->name('users.store');

Route::get('users/{user}/edit', [UserController::class, 'edit']) ->name('users.edit');

Route::put('users/{user}', [UserController::class, 'update']) ->name('users.update');

Route::delete('users/{user}', [UserController::class, 'destroy']) ->name('users.destroy');

Route::put('users/{user}/actualizar', [UserController::class, 'actualizar']) ->name('users.actualizar');



// Login

Route::get('login', [SessionsController::class, 'index']) ->name('login.index');

Route::post('login', [SessionsController::class, 'store']) ->name('login.store');

Route::get('inicio', [SessionsController::class, 'login']) ->name('login.inicio');

Route::get('logout', [SessionsController::class, 'destroy']) ->name('login.destroy');



// Registro

Route::get('register', [RegisterController::class, 'index']) ->name('register.index');

Route::post('register', [RegisterController::class, 'store']) ->name('register.store');



// perfiles

Route::get('perfil/{user}', [PerfilesController::class, 'index']) ->name('perfil.me');

Route::get('misdatos/{user}', [PerfilesController::class, 'misdatos']) ->name('perfil.datos');

Route::get('foto/{user}', [PerfilesController::class, 'fotoperfil']) ->name('foto.me');

Route::put('foto/{user}/subir', [PerfilesController::class, 'subirfoto']) ->name('subir.foto');

Route::get('perfilemp', [PerfilesController::class, 'perfilemp']) ->name('perfilemp.me');

Route::get('cuenta/{emprendimiento}', [PerfilesController::class, 'cuenta']) ->name('perfilemp.user');



//Publicaciones

Route::get('publicaciones', [publicacioneController::class, 'index']) ->name('publicaciones.index');

Route::get('publicaciones/create', [publicacioneController::class, 'create']) ->name('publicaciones.create');

Route::post('publicaciones', [publicacioneController::class, 'store']) ->name('publicaciones.store');

Route::get('publicaciones/{publicacione}/edit', [publicacioneController::class, 'edit']) ->name('publicaciones.edit');

Route::put('publicaciones/{publicacione}', [publicacioneController::class, 'update']) ->name('publicaciones.update');

Route::delete('publicaciones/{publicacione}', [publicacioneController::class, 'destroy']) ->name('publicaciones.destroy');

Route::get('publicaciones/{multimedia}/{publicacione}', [PublicacioneController::class, 'multimedia']) ->name('publicaciones.multimedia');



//comentarios

Route::post('comentarios/{publicacione}', [ComentarioController::class, 'store']) ->name('comentarios.store');

Route::delete('comentarios/{comentario}/destroy', [ComentarioController::class, 'destroy']) ->name('comentarios.destroy');



//reacciones

Route::post('reacciones/{publicacione}', [ReaccioneController::class, 'store']) ->name('reacciones.store');

Route::delete('reacciones/{reaccione}/destroy', [ReaccioneController::class, 'destroy']) ->name('reacciones.destroy');



//followers

Route::post('followers/{emprendimiento}', [FollowerController::class, 'store']) ->name('followers.store');

Route::delete('followers/{follower}/destroy', [FollowerController::class, 'destroy']) ->name('followers.destroy');



// notificaciones

Route::get('notificaciones/{publicacione}/{tipo}', [NotificacioneController::class, 'notificaciones']) ->name('notificaciones');

Route::get('read/{notificacione}', [NotificacioneController::class, 'read']) ->name('read');

Route::get('notifview', [NotificacioneController::class, 'notifView']) ->name('notifview');



//Inversiones

Route::get('inversionistas', [InversionistaController::class, 'index']) ->name('inversionistas.index');

Route::get('inversionistas/create', [InversionistaController::class, 'create']) ->name('inversionistas.create');

Route::get('inversionistas/crear/{emprendimiento}', [InversionistaController::class, 'crear']) ->name('inversionistas.crear');

Route::post('inversionistas/{emprendimiento}', [InversionistaController::class, 'store']) ->name('inversionistas.store');

Route::get('inversionistas/{inversionista}/edit', [InversionistaController::class, 'edit']) ->name('inversionistas.edit');

Route::put('inversionistas/{inversionista}', [InversionistaController::class, 'update']) ->name('inversionistas.update');

Route::delete('inversionistas/{inversionista}', [InversionistaController::class, 'destroy']) ->name('inversionistas.destroy');



// Empleo

Route::get('empleos', [EmpleoController::class, 'index']) ->name('empleos.index');

Route::get('empleos/create', [EmpleoController::class, 'create']) ->name('empleos.create');

Route::get('empleos/crear/{emprendimiento}', [EmpleoController::class, 'crear']) ->name('empleos.crear');

Route::post('empleos/{emprendimiento}', [EmpleoController::class, 'store']) ->name('empleos.store');

Route::get('empleos/{empleo}/edit', [EmpleoController::class, 'edit']) ->name('empleos.edit');

Route::put('empleos/{empleo}', [EmpleoController::class, 'update']) ->name('empleos.update');

Route::delete('empleos/{empleo}', [EmpleoController::class, 'destroy']) ->name('empleos.destroy');



//Chat

Route::get('chat', [ChatController::class, 'chat']) ->name('chat');




/*
Route::get('personas', [PersonaController::class, 'index']) ->name('personas.index');

Route::get('personas/create', [PersonaController::class, 'create']) ->name('personas.create');

Route::post('personas', [PersonaController::class, 'store']) ->name('personas.store');

Route::get('personas/{persona}/edit', [PersonaController::class, 'edit']) ->name('personas.edit');

Route::put('personas/{persona}', [PersonaController::class, 'update']) ->name('personas.update');

Route::delete('personas/{persona}', [PersonaController::class, 'destroy']) ->name('personas.destroy');
*/