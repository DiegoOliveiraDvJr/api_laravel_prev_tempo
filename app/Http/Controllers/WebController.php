<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Legenda;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function index(Request $request, $id_cidade = null)
    {
        $cidade = Cidade::findOrFail(1);
        $cidade->bairros;

        foreach($cidade['bairros'] as $bairro){
            $bairro->previsoes;
        }
        return response()->json(['cidade' => $cidade, 'cityId' => $id_cidade, 'legendas' => Legenda::all()]);
    }

    public function check()
    {
        return response()->json(['status' => 'ok']);
    }
    
    public function dashboard() {

        $cidades = Cidade::all();
        foreach ($cidades as $cidade) {
            $cidade->bairros;
        }
        return response()->json(['cidades' =>  $cidades]);
    }
}
