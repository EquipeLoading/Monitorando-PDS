<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login/{erro?}', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'autenticacao'])->name('login');

Route::get('/cadastro', [\App\Http\Controllers\CadastroController::class, 'index'])->name('cadastro');
Route::resource('cadastro', '\App\Http\Controllers\CadastroController');