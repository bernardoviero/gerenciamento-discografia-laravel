<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Faixa;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function listar(){
        $data['albums'] = Album::all();
        $data['faixas'] = Faixa::all();

        return view('layouts/inicio',$data);
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
