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
//crear usuario 
Route::post("/cliente", "App\\Http\\Controllers\\ClienteController@store");

