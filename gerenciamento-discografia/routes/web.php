<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/',[Controller::class,'index'])->name('index');
Route::post('/',[Controller::class,'filtrar'])->name('filtrar');

Route::get('/adicionar-album', [Controller::class, 'formularioAlbum'])->name('formularioAlbum');
Route::post('/adicionar-album', [Controller::class, 'criarAlbum'])->name('criarAlbum');

Route::get('/adicionar-faixa',[Controller::class,'formularioFaixa'])->name('formularioFaixa');
Route::post('/adicionar-faixa',[Controller::class,'criarFaixa'])->name('criarFaixa');

Route::delete('/excluir-album/{id}',[Controller::class,'excluirAlbum'])->name('excluirAlbum');
Route::delete('/excluir-faixa/{id}',[Controller::class,'excluirFaixa'])->name('excluirFaixa');
