<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngressoController;
use App\Http\Controllers\ClienteController;

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

Route::get('/', [IngressoController::class, 'index'])->name('home');
Route::get('/categoria', [IngressoController::class, 'categoria'])->name('categoria');
Route::get('/{idcategoria}/categoria', [IngressoController::class, 'categoria'])->name('categoria_id');
Route::get('/cadastrar', [ClienteController::class, 'cadastrar'])->name('cadastrar');


