<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\Auth\AuthController;
  
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


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('settings', [AuthController::class, 'settings'])->name('settings'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::view('/welcome', 'welcome')->name('pua');
Route::view('/main', 'main')->name('mainpua');
Route::post('/cambiarcorreo', 'App\Http\Controllers\EditCorreo@editarcorreo')->name('correo');
Route::view('/tick', 'tick')->name('tick');
Route::view('/cross', 'cross')->name('cross');
Route::post('/cambiarcontra', 'App\Http\Controllers\EditContra@editarcontra')->name('contra');
Route::view('/tickpass', 'tickpass')->name('tickpass');
Route::view('/crosspass', 'crosspass')->name('crosspass');