<?php

use App\Http\Controllers\CategoriasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ClientesController;
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
    return view('welcome');
})->name('home');


//Proveedores
Route::get('/proveedores',[ProveedoresController::class,'index'])->name('proveedores.index');
Route::get('/proveedores/create',[ProveedoresController::class,'create'])->name('proveedores.create');
Route::post('/proveedores/store',[ProveedoresController::class,'store'])->name('proveedores.store');
Route::get('/proveedores/edit/{id}',[ProveedoresController::class,'edit'])->name('proveedores.edit');
Route::put('/proveedores/update/{id}',[ProveedoresController::class,'update'])->name('proveedores.update');
Route::get('/proveedores/show/{id}',[ProveedoresController::class,'show'])->name('proveedores.show');
Route::delete('/proveedores/destroy/{id}',[ProveedoresController::class,'destroy'])->name('proveedores.destroy');

//Clientes
Route::get('/clientes',[ClientesController::class,'index'])->name('clientes.index');
Route::get('/clientes/create',[ClientesController::class,'create'])->name('clientes.create');
Route::post('/clientes/store',[ClientesController::class,'store'])->name('clientes.store');
Route::get('/clientes/edit/{id}',[ClientesController::class,'edit'])->name('clientes.edit');
Route::put('/clientes/update/{id}',[ClientesController::class,'update'])->name('clientes.update');
Route::get('/clientes/show/{id}',[ClientesController::class,'show'])->name('clientes.show');
Route::delete('/clientes/destroy/{id}',[ClientesController::class,'destroy'])->name('clientes.destroy');

//Categorias
Route::get('/categorias',[CategoriasController::class,'index'])->name('categorias.index');
Route::get('/categorias/create',[CategoriasController::class,'create'])->name('categorias.create');
Route::post('/categorias/store',[CategoriasController::class,'store'])->name('categorias.store');
Route::get('/categorias/edit/{id}',[CategoriasController::class,'edit'])->name('categorias.edit');
Route::put('/categorias/update/{id}',[CategoriasController::class,'update'])->name('categorias.update');
Route::get('/categorias/show/{id}',[CategoriasController::class,'show'])->name('categorias.show');
Route::delete('/categorias/destroy/{id}',[CategoriasController::class,'destroy'])->name('categorias.destroy');

