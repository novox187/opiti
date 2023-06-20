<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\RusiaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\RegisterController;
use App\Models\Client;

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


Route::get('/', [HomeController::class, 'index'])->name('inicio');

Route::get('/rusia', [RusiaController::class, 'index'])->name('rusia');

Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'store']);



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/admin/reuniones', [AdminController::class, 'index'])->name('admin.show');
Route::put('/admin/reuniones', [AdminController::class, 'update'])->name('admin.update');


Route::get('/admin/clientes', [ClientController::class, 'index'])->name('clientes');