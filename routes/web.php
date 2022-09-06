<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedoresController;

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

Route::get('/proveedores',[ProveedoresController::class,'index'])->name('proveedores.index');
Route::get('/proveedores/create',[ProveedoresController::class,'create'])->name('proveedores.create');
Route::post('/proveedores/store',[ProveedoresController::class,'store'])->name('proveedores.store');
Route::get('/proveedores/edit/{id}',[ProveedoresController::class,'edit'])->name('proveedores.edit');
Route::put('/proveedores/update/{id}',[ProveedoresController::class,'update'])->name('proveedores.update');
Route::get('/proveedores/show/{id}',[ProveedoresController::class,'show'])->name('proveedores.show');
Route::delete('/proveedores/destroy/{id}',[ProveedoresController::class,'destroy'])->name('proveedores.destroy');

