<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public function votar($num){
        $candidato = Candidato::where('numero', $num)->first();
        $candidato->quant_votos++;
        $producao->save();
        return response('votado!', 200);
    }

    public function getVotos(){
        $votosPrefeito= Candidato::where("cargo", "=", "prefeito")->get();
        $votosVereador= Candidato::where("cargo", "=", "vereador")->get();
        $completo = ['prefeito' => $votosPrefeito,'vereador' => $votosVereador];
        return response()->json($completo);
    }
}
