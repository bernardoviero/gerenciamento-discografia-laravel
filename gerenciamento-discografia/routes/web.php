<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/',[Controller::class,'index'])->name('index');
Route::post('/',[Controller::class,'filtrar'])->name('filtrar');

Route::get('/adicionar-album', [Controller::class, 'formularioAlbum'])->name('formularioAlbum');
Route::post('/adicionar-album', [Controller::class, 'criarAlbum'])->name('criarAlbum');

Route::get('/adicionar-faixa',[Controller::class,'formularioFaixa'])->name('formularioFaixa');
Route::post('/adicionar-faixa',[Controller::class,'criarFaixa'])->name('criarFaixa');

Route::post('/excluir-album',[Controller::class,'excluirAlbum'])->name('excluirAlbum');;
Route::post('/excluir-faixa',[Controller::class,'excluirFaixa'])->name('excluirFaixa');;
