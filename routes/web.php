<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//return index
Route::get("/cliente", "App\\Http\\Controllers\\ClienteController@index")->name('cliente.index');
    
//ir a crear cliente
Route::get("/cliente/create", "App\\Http\\Controllers\\ClienteController@create")->name('cliente.create');
//crear clientes 
Route::post("/cliente", "App\\Http\\Controllers\\ClienteController@store");
//listar clientes
Route::get("/cliente/{cliente}", "App\\Http\\Controllers\\ClienteController@show")->name('cliente.show');
//enviar a pagina editar
Route::get("/cliente/{cliente}/edit", "App\\Http\\Controllers\\ClienteController@edit")->name('cliente.edit');
//editar
Route::put("/cliente/{cliente}", "App\\Http\\Controllers\\ClienteController@update")->name('cliente.update');
//eliminar
Route::delete("/cliente/{cliente}", "App\\Http\\Controllers\\ClienteController@destroy")->name('cliente.destroy');


