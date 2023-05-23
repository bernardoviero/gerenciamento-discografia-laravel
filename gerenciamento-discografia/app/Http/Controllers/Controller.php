<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function listar(){
        return view('inicial');
    }

    public function criar_album(){
        return view('adicionar-album');
    }

    public function excluir_album(){
    }
    public function criar_faixa(){
        return view('adicionar-album');
    }


    public function excluir_faixa(){
    }
}
