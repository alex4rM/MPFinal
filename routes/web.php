<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;

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

/*Route::get('/', function () {
    return view('solicitud.index');
})->middleware('auth');*/

Route::get('/register',[RegistroController::class, 'create'])
	->middleware('guest')
	->name('register.index');

Route::post('/register',[RegistroController::class, 'store'])
	->name('register.store');

Route::get('/login',[SessionsController::class, 'create'])
	->middleware('guest')
	->name('login.index');

Route::post('/login',[SessionsController::class, 'store'])
	->name('login.store');

Route::get('/logout',[SessionsController::class, 'destroy'])
	->middleware('auth')
	->name('login.destroy');

Route::get('/admin',[AdminController::class, 'index'])
	->middleware('auth.admin')
	->name('admin.index');

Route::resource('solicitud', \App\Http\Controllers\SolicitudController::class)->middleware('auth');
