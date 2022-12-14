<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

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
Route::get("/", [HomeController::class, 'home']);
Route::get("/detalhe/{id}", [HomeController::class, 'detalhe']);
Route::resource('categorias', CategoriaController::class);
Route::resource('fornecedores', FornecedorController::class);
Route::resource('produtos', ProdutoController::class);


