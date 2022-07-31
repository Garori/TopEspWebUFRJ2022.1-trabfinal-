<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CandidatoController extends Controller
{
    public function votar($cargo, $num){
        try {
            $voto = Candidato::where([
                ['numero', '=', $num],
                ['cargo', '=', $cargo]
            ])->firstOrFail();
            $voto->quant_votos++;
            $voto->save();
            return response('votado!', 200);
        } catch (ModelNotFoundException $e) {
            $numero_do_recebedor = ($cargo == 'prefeito') ? '00' : '00000';
            $recebedor_voto_anulado = Candidato::where('numero','=', $numero_do_recebedor)->first();
            $recebedor_voto_anulado->quant_votos++;
            $recebedor_voto_anulado->save();
            return response('voto anulado ou branco', 200);
        }
    }

    public function getVotos(){
        $votosPrefeito= Candidato::where("cargo", "=", "prefeito")->get();
        $votosVereador= Candidato::where("cargo", "=", "vereador")->get();
        $completo = ['prefeito' => $votosPrefeito,'vereador' => $votosVereador];
        return response()->json($completo);
    }

    public function resetarEleicao(){
        Candidato::query()->update(['quant_votos' => 0]);
        return response('eleição resetada!', 200);
    }
}
