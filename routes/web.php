<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/filmes', [HomeController::class, 'filmes']);

Route::get('/contato', function () {
    return view('contato');
});

Route::post('/contato', function (Request $request) {
    return view('contato-sucesso', [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'message' => $request->input('message')
    ]);
});
