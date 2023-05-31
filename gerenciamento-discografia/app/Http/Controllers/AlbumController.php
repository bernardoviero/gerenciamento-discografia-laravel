<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Faixa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AlbumController extends Controller
{
    public function criarAlbum(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3|max:100',
            'descricao' => 'required|max:255',
            'ano' => 'required|numeric|max:2030|min:1960'
        ]);

        $dados = $request->only('nome', 'descricao', 'ano');
        $novoAlbum = Album::create($dados);
        $novoAlbum->save();

        return redirect()->route('index')->with('success', 'Álbum ' . $novoAlbum->nome . ' criado com sucesso!');
    }

    public function filtrar(Request $request)
    {
        $busca = $request->search;
        $data['albums'] = Album::where('excluido', 0)->where('nome', 'like', '%' . $busca . '%')->get();
        $data['faixas'] = Faixa::where('excluido', 0)->get();

        if ($busca != null) {
            return view('inicio', $data);
        } else {
            return redirect()->route('index');
        }
    }

    public function formularioAlbum(Request $request)
    {
        return view('adicionar-album');
    }

    public function excluirAlbum(Request $request, $id)
    {
        $idAlbum = $id;

        $album = Album::find($idAlbum);
        $album->excluido = 1;
        $album->save();

        return Redirect::back()->with('success', 'Álbum ' . $album->nome . ' excluído com sucesso!');
    }
}