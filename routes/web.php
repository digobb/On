<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngressoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;

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

//login
Route::match(['get', 'post'], '/logar', [UsuarioController::class, 'logar'])->name('logar');
//logout
Route::get('/sair', [UsuarioController::class, 'sair'])->name('sair');
//cadastro
Route::get('/cadastrar', [ClienteController::class, 'cadastrar'])->name('cadastrar');
Route::post('/cliente/cadastrar', [ClienteController::class, 'cadastrarCliente']) -> name('cadastrar_cliente');


Route::get('/{idcategoria}/categoria', [IngressoController::class, 'categoria'])->name('categoria_id');
Route::get('/categoria', [IngressoController::class, 'categoria'])->name('categoria');
Route::get('/{idingresso}/carrinho/adicionar', [IngressoController::class, 'adicionarCarrinho'])->name('adicionar_carrinho');
Route::get('/carrinho', [IngressoController::class, 'verCarrinho'])->name('ver_carrinho');
Route::get('/{indice}/excluircarrinho', [IngressoController::class, 'excluirCarrinho'])->name('carrinho_excluir');

Route::post('/carrinho/finalizar', [IngressoController::class, 'finalizar']) -> name('carrinho_finalizar');



