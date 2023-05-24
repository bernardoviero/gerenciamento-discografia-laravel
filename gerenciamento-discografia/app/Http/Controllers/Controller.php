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
    public function index(){
        $data['albums'] = Album::where('excluido',0)->get();
        $data['faixas'] = Faixa::where('excluido',0)->get();

        return view('inicio',$data);
    }
}
