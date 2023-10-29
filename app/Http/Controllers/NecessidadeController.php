<?php

namespace App\Http\Controllers;

use App\Http\Resources\NecessidadeResource;
use App\Models\Necessidade;
use App\Models\Tipo_Necessidade;
use App\Notifications\NovaNecessidadeCadastrada;
use Database\Seeders\TipoNecessidade;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule as ValidationRule;

class NecessidadeController extends Controller
{
    public function listarNecessidadesJson($id){
        return new NecessidadeResource(Necessidade::find($id));
    }

    public function cadastrarNecessidadeView(Request $request){


        return view('Telas.CadastrarNecessidade', ['tipoNecessidade' => Tipo_Necessidade::all(), 'Notificacoes' => $request->user()->notifications]);
    }

    public function cadastrarNecessidade(Request $request){
        $dados = Validator::make(
            $request->all(),
            [
            'NomeNecessidade' => 'required|min:15|max:70|',
            'Categoria' => 'required|min:2|max:20',
            'Descricao' => 'required|min:20|max:70',
            'Tipo' => ['required', 'integer', ValidationRule::exists('Tipo_Necessidade', 'id')],
            'Meta' => 'required|integer'
        ])->validate();
        
        $necessidade = $request->user()->Necessidade()->create([
            'NomeNecessidade' => $request->NomeNecessidade,
            'Categoria' => $request->Categoria,
            'descricao' => $request->Descricao,
            'meta' => $request->Meta,
            'tipo_necessidade_id' => $request->Tipo,
        ]);

        $request->user()->notify(new NovaNecessidadeCadastrada([
            'Tipo' => 'Necessidade cadastrada',
            'Descricao' => 'Necessidade '. $request->NomeNecessidade.' foi cadastrada com sucesso',
            'url' => route("listarNecessidadesCadastradas")
        ]));

        return redirect()->to("listarNecessidadesCadastradas")->with(['create-necessidade' => 'Necessidade '.$request->NomeNecessidade.' cadastrada com sucesso']);

    }

    public function atualizarNecessidadeView(Request $request, $id){

        if(!$request->user()->Necessidade()->where('id', $id)->where('ativo', true)->exists()){

            return back()->withErrors(['update-necessidade' => 'Necessidade não cadastrada']);

        }

        $request->user()->notify(new Notificacao([
            'Tipo' => 'Necessidade atualizada'
        ]));
        return view('Telas.atualizarNecessidade', ['Necessidade' => $request->user()->Necessidade()->where('id', $id)->where('ativo', true)->first(), 'id' => $id]);
    }

    public function atualizarNecessidade(Request $request, $id){

        if(!$request->user()->Necessidade()->where('id', $id)->where('ativo', true)->exists()){
            return back()->withErrors(['update-necessidade' => 'Necessidade está desativada']);
        }

        $dados = Validator::make(
            $request->all(),
            [
            'NomeNecessidade' => 'required|min:15|max:70|',
            'Categoria' => 'required|min:1|max:20',
            'Descricao' => 'required|min:20|max:70',
            'Meta' => 'required|integer'
        ])->validate();
        
        $request->user()->Necessidade()->where('id', $id)->where('ativo', true)->update([
            'NomeNecessidade' => $request->NomeNecessidade,
            'Categoria' => $request->Categoria,
            'descricao' => $request->Descricao,
            'meta' => $request->Meta,
        ]);

        return to_route('listarNecessidadesCadastradas')->with(['create-necessidade' => 'Necessidade '.$request->NomeNecessidade.' atualizada com sucesso']);
    }

    public function excluirNecessidade(Request $request,$id){
        $dados = Validator::make(
            ['id' => $id],
            [
            'id' => ['required', 'integer', 'exists:Necessidade']
        ])->validate();

        if(!$request->user()->Necessidade()->where('id', $id)->where('ativo', true)->exists()){
            return to_route('listarNecessidadesCadastradas')->withErrors(['delete-necessidade' => "Está necessidade não existe ou já está desativada"]);
        }

        $request->user()->Necessidade()->where('id', $id)->update([
            'ativo' => false
        ]);

        return back()->with(['success-delete-necessidade' => 'Necessidade está desativada']);

        
    }

    
}
