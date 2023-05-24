<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FaixaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[Controller::class,'index'])->name('index');

Route::post('/',[AlbumController::class,'filtrar'])->name('filtrar');
Route::get('/adicionar-album', [AlbumController::class, 'formularioAlbum'])->name('formularioAlbum');
Route::post('/adicionar-album', [AlbumController::class, 'criarAlbum'])->name('criarAlbum');
Route::delete('/excluir-album/{id}',[AlbumController::class,'excluirAlbum'])->name('excluirAlbum');

Route::get('/adicionar-faixa',[FaixaController::class,'formularioFaixa'])->name('formularioFaixa');
Route::post('/adicionar-faixa',[FaixaController::class,'criarFaixa'])->name('criarFaixa');
Route::delete('/excluir-faixa/{id}',[FaixaController::class,'excluirFaixa'])->name('excluirFaixa');
