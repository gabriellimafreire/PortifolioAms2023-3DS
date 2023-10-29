<?php

namespace App\Http\Controllers;

use App\Models\Doacao;
use App\Models\Necessidade;
use App\Models\Tipo_Doacao;
use App\Models\Tipo_Necessidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DoacoesController extends Controller
{

    public function cadastrarDoacaoMaterialView(Request $request, $id){
        return view('Telas.RealizarDoacaoMaterial', ['id' => $id]);
    }

    public function cadastrarDoacaoMaterial(Request $request){
        $dados = Validator::make(
            $request->all(),
            [
                'id' => 'integer|exists:Necessidade',
                'Descricao' => "required|min:10|max:50"
            ]
        )->validate();

        if(!Necessidade::where('id', $request->id)->where('tipo_necessidade_id', Tipo_Necessidade::where('NomeTipoNecessidade', 'Material')->first()->id)->exists()){
            return back()->withErrors(["create-doacaoMaterial" => "Não foi possivel realzar a doação"]);
        }

        $Doacao = $request->user()->Doacoes()->create([
            'necessidade_id' => $request->id,
            'tipo_doacao_id' => Tipo_Doacao::where('TipoDoacao', 'Material')->first()->id,
            'DataDoacao' => date('d/m/Y'),
            'HoraDoacao' => date('h:s')
        ]);

        $Doacao->Doacao_Material()->create([
            'tipo_doacao_id' => Tipo_Doacao::where('TipoDoacao', 'Material')->first()->id,
            'Descricao' => $request->Descricao
        ]);

        return to_route("listarDoacoesRealizadas");
    }

    public function listarDoacaoRealizada(Request $request, $id){

        
        if(!$request->user()->Doacoes()->where('id', $id)->exists()){
            return to_route('listarDoacoesRealizadas')->withErrors(["doacao" => "doacao não encontrada"]);
        }

        $doacao = $request->user()->Doacoes()->where('id', 4)->first();

        if($request->user()->Doacoes()->where('id', $id)->first()->tipo_doacao_id == Tipo_Doacao::where('TipoDoacao', 'Material')->first()->id){

            return view('Telas.DoacaoMaterialRecebida', ['Doacoes' => $doacao->withoutRelations(), 'DoacaoMaterial' => $doacao->Doacao_Material()->first()->withoutRelations(), 'ong' => $doacao->Ong->withouRelations()]);

        }else if($request->user()->where('id', $id)->first()->tipo_doacao_id == Tipo_Doacao::where('TipoDoacao', 'Monetaria')->first()->id){

            return view('Telas.DoacaoMonetariaRecebida', ['Doacoes' => $doacao->withoutRelations(), 'DoacaoMonetaria' => $doacao->first()->Doacao_Monetaria()->withoutRelations(), 'ong' => $doacao->Ong->withouRelations()]);

        }

    }

    public function listarDoacaoRecebida(Request $request, $id){
    
        if($request->user()->Doacoes()->where('id', $id)->exists()){
            return to_route('listarDoacoesRecebidas')->withErrors(["doacao" => "doacao não encontrada"]);
        }

        $doacao = $request->user()->Doacoes()->where('id', 4)->first();

        if($request->user()->Doacoes()->where('id', $id)->first()->tipo_doacao_id == Tipo_Doacao::where('TipoDoacao', 'Material')->first()->id){

            return view('Telas.DoacaoMaterialRecebida', ['Doacoes' => $doacao->withoutRelations(), 'DoacaoMaterial' => $doacao->Doacao_Material()->first()->withoutRelations(), 'Doador' => $doacao->Ong->withouRelations()]);

        }else if($request->user()->where('id', $id)->first()->tipo_doacao_id == Tipo_Doacao::where('TipoDoacao', 'Monetaria')->first()->id){

            return view('Telas.DoacaoMonetariaRecebida', ['Doacoes' => $doacao->withoutRelations(), 'DoacaoMonetaria' => $doacao->first()->Doacao_Monetaria()->withoutRelations(), 'Ong' => $doacao->Ong->withouRelations()]);

        }

        return to_route('listarDoacoesRecebidas')->withErrors(["doacao" => "Erro ao listar doacao"]);

    }
}
