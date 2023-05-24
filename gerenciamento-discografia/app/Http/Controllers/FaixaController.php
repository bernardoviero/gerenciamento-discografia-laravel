<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Faixa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FaixaController extends Controller
{
    public function criarFaixa(Request $request){
        $request->validate([
            'nome' => 'required|min:3|max:100',
            'duracao' => 'required',
            'id_album' => 'required'
        ]);
        $dados = $request->only('nome', 'duracao', 'id_album');
        $novaFaixa = Faixa::create($dados);
        $novaFaixa->save();

        return redirect()->route('index');
    }

    public function formularioFaixa(Request $request){
        $opcoesAlbums = Album::where('excluido',0)
            ->select('id_album as value','nome as label')
            ->get()->toArray();

        return view('adicionar-faixa')->with('opcoesAlbums',$opcoesAlbums);
    }

    public function excluirFaixa(Request $request, $id)
    {
        $idFaixa = $id;
        $faixa = Faixa::find($idFaixa);
        $faixa->excluido = 1;
        $faixa->save();

        return Redirect::back();
    }
}
