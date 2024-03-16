<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/helloWord', function () {
    return "Hellow Word";
});

Route::get('/', function () {
    return view('formPessoa');
});

Route::post('/pessoa', ['uses' => 'App\Http\Controllers\contatoController@index']);