<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/',[Controller::class,'listar'])->name('listar');
Route::post('/',[Controller::class,'listar'])->name('buscar');

Route::get('/adicionar-album', [Controller::class, 'criar_album'])->name('criar_album');
Route::post('/adicionar-album', [Controller::class, 'criar_album'])->name('criar_album');

Route::get('/adicionar-faixa',[Controller::class,'criar_faixa'])->name('criar_faixa');
Route::post('/adicionar-faixa',[Controller::class,'criar_faixa'])->name('criar_faixa');

Route::get('/excluir-album',[Controller::class,'excluir_album']);
Route::get('/excluir-faixa',[Controller::class,'excluir_faixa']);
