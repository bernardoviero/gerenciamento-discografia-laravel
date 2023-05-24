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
    public function index(){
        $data['albums'] = Album::where('excluido',0)->get();
        $data['faixas'] = Faixa::where('excluido',0)->get();

        return view('inicio',$data);
    }

    public function filtrar(Request $request){
        $busca = $request->search;
        $data['albums'] = Album::where('excluido',0)->where('nome','like','%'.$busca.'%')->get();
        $data['faixas'] = Faixa::where('excluido',0)->get();

        if($busca != null){
            return view('inicio',$data);
        }else{
            return redirect()->route('index');
        }
    }

    public function criarAlbum(Request $request){
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'ano' => 'required|numeric'
        ]);

        $dados = $request->only('nome', 'descricao', 'ano');
        $novoAlbum = Album::create($dados);
        $novoAlbum->save();
        return redirect()->route('index');
    }

    public function formularioAlbum(Request $request){
        return view('adicionar-album');
    }
    public function criarFaixa(Request $request){
        $request->validate([
            'nome' => 'required',
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

    public function excluirAlbum(Request $request, $id){
        $idAlbum = $id;

        $album = Album::find($idAlbum);
        $album->excluido = 1;
        $album->save();
        return Redirect::back();
    }
}
