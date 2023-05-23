<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Faixa;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function listar(Request $request){
        if(!isset($request->search)){
            $data['albums'] = Album::where('excluido',0)->get();
            $data['faixas'] = Faixa::where('excluido',0)->get();
        }else{
            $busca = $request->search;
            $data['albums'] = Album::where('excluido',0)->where('nome','like','%'.$busca.'%')->get();
            $data['faixas'] = Faixa::where('excluido',0)->get();
        }

        return view('layouts.inicio',$data);
    }

    public function criar_album(){
        return view('adicionar-album');
    }
    public function criar_faixa(){
        return view('adicionar-album');
    }

    public function excluir_faixa(Request $request)
    {
        $idFaixa = $request->id_faixa;

        $faixa = Faixa::find($idFaixa);
        $faixa->excluido = 1;
        $faixa->save();

        return Redirect::back();
    }

    public function excluir_album(Request $request){
        $idAlbum = $request->id_album;

        $album = Album::find($idAlbum);
        $album->excluido = 1;
        $album->save();

        return Redirect::back();
    }
}
