<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/',[Controller::class,'listar']);

Route::get('/adicionar-album',[Controller::class,'criar_album']);
Route::get('/excluir-album',[Controller::class,'excluir_album']);

Route::get('/adicionar-faixa',[Controller::class,'criar_faixa']);
Route::get('/excluir-faixa',[Controller::class,'excluir_faixa']);
