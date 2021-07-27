<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index2'])->name('index2');
Route::get('/login', function () { $text = false; return view('auth/login', compact('text')); });
Route::get('/auth/register', function () { $text = false; return view('auth/register', compact('text')); });
Route::get('/passwords/reset', [App\Http\Controllers\UserController::class, 'telaReset'])->name('telaReset');
Route::post('/passwords/reset', [App\Http\Controllers\UserController::class, 'resetarSenha'])->name('resetarSenha');
Route::post('/auth/register', [App\Http\Controllers\UserController::class, 'store'])->name('store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home/cadastrarLinks', [App\Http\Controllers\HomeController::class, 'cadastrarLinks'])->name('cadastrarLinks');
Route::get('/home/novoLinks', [App\Http\Controllers\HomeController::class, 'novoLinks'])->name('novoLinks');
Route::post('/home/novoLinks', [App\Http\Controllers\HomeController::class, 'storeLinks'])->name('storeLinks');
Route::get('/home/cadastrarLinks/atualizar/{id}', [App\Http\Controllers\HomeController::class, 'atualizarLinks'])->name('atualizarLinks');
Route::post('/home/cadastrarLinks/atualizar/{id}', [App\Http\Controllers\HomeController::class, 'updateLinks'])->name('updateLinks');
Route::get('/home/cadastrarLinks/excluir/{id}', [App\Http\Controllers\HomeController::class, 'excluirLinks'])->name('excluirLinks');
Route::post('/home/cadastrarLinks/excluir/{id}', [App\Http\Controllers\HomeController::class, 'deleteLinks'])->name('deleteLinks');

