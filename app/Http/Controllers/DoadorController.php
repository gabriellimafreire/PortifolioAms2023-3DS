<?php

namespace App\Http\Controllers;

use App\Mail\DesativarConta;
use App\Models\Doador;
use App\Models\Personal_Access_Tokens;
use App\Models\Preferencia;
use App\Models\Telefone_Doador;
use App\Models\Tipo_Documento;
use App\Models\Tipo_Origem;
use App\Rules\cpf;
use App\Rules\dataNascimento;
use App\Rules\telefone;
use DateTime;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password as RulesPassword;
use Termwind\Components\Raw;

class DoadorController extends Controller
{
    public function cadastrarDoadorView(){
        return view('cadastrarDoador');

    }
    public function cadastrarDoador(Request $request){


        $dados = Validator::make(

            $request->all(),
            [
                'Nome' => 'required|string|min:10|max:80',
                'Email' => ['required', 'email', Rule::unique('Doador')->ignore($request->user()->id), Rule::unique('Ong'), Rule::unique('Doador', 'email_contato')],
                'Email_Contato' => ['required', 'email', Rule::unique('Doador')->ignore($request->user()->id), Rule::unique('Ong'), Rule::unique('Doador', 'email_contato')],
                'Data' => ['required', 'date', new dataNascimento],
                'Endereco' =>'required|string|min:20|max:70',
                'CPF' => ['required', 'min:14', 'max:14', new cpf],
                'Telefone' => ['required', 'min:15', 'max:30', new telefone],
                'Senha' => ['required', RulesPassword::min(7)->mixedCase()->symbols(), 'confirmed']
            ]
        )->validate();

        // cadastrar tipo de origem

        $Tipo_Origem = new Tipo_Origem();

        $Tipo_Origem->DataFundNasc = $request->Data;

        $Tipo_Origem->Descricao = "Nascimento";

        $Tipo_Origem->save();

        // cadastrar doador

        $Doador = new Doador();

        $Doador->Nome = $request->Nome;

        $Doador->email = $request->Email;

        $Doador->email_contato = $request->Email_Contato;

        $Doador->endereco = $request->Endereco;

        $Doador->password = Hash::make($request->Senha);;

        $Doador->origem_id = $Tipo_Origem->id;

        $Doador->ativo = true;

        $Doador->save();

        // cadastrar telefone

        $Doador->Telefone()->create([
            'NumeroTelefone' => $request->Telefone,
            'Descricao' => "celular"
        ]);

        // cadastrar CPF

        $Doador->Tipo_Documento()->create([
            'NumeroDocumento' => $request->CPF,
            'Descricao' => "CPF"
        ]);

        if(Auth::guard('Doador')->attempt(['email' => $request->Email, 'password' => $request->Senha])){
            $request->user()->sendEmailVerificationNotification();
            redirect('/');
        }else{
            return back()->withErrors("Erro ao realizar cadastro");
        }

        

    }

    public function atualizarDoadorView(Request $request){
        return view('Telas.AtualizarContaDoador', ['Doador' => $request->user()]);
    }

    public function atualizarDoador(Request $request){

        
        $dados = Validator::make(
            $request->all(),
            [
                'Nome' => 'required|string|min:10|max:80',
                'Email' => ['required', 'email', Rule::unique('Doador')->ignore($request->user()->id), Rule::unique('Ong'), Rule::unique('Doador', 'email_contato')],
                'Email_Contato' => ['required', 'email', Rule::unique('Doador')->ignore($request->user()->id), Rule::unique('Ong'), Rule::unique('Doador', 'email')],
                'Data' => ['required', 'date', new dataNascimento],
                'Endereco' =>'required|string|min:20|max:70',
                'CPF' => ['required', 'min:14', 'max:14', new cpf],
                'Telefone' => ['required', 'min:15', 'max:30', new telefone],
            ]
        )->validate();

        $data = $request->user()->Tipo_Origem;
        
        $data->DataFundNasc = $request->Data;

        $data->save();

        $request->user()->update([
            'Nome' => $request->Nome,
            'email' => $request->Email,
            'email_contato' => $request->Email_Contato,
            'endereco' => $request->Endereco
        ]);

        $request->user()->Tipo_Documento()->update([
            'NumeroDocumento' => $request->CPF
        ]);

        $request->user()->Telefone()->update([
            'NumeroTelefone'=> $request->Telefone
        ]);

        return back()->with("success-update", "dados atualizados com sucesso");

    }

    public function confirmarEmailDesativacao(Request $request){

        $tokens = Personal_Access_Tokens::where('name', 'confirmate_disable_account')->where('tokenable_id', $request->user()->id)->where('tokenable_type', $request->user()::class)->delete();

        $tokens = Personal_Access_Tokens::where('name', 'disable_account')->where('tokenable_id', $request->user()->id)->where('tokenable_type', $request->user()::class)->delete();

        $token = $request->user()->createToken("confirmate_disable_account", ["confirm_disable_account"], new DateTime(now()->addHours(4)));

        $token = Crypt::encryptString($token->plainTextToken);

        Mail::to($request->user())->send(new DesativarConta($token));

        return view('Telas2.Confirmar_E-mail_Doador');

    }

    public function confirmarDesativacao($token){

        $tokens = Personal_Access_Tokens::where('name', "confirmate_disable_account")->select('id','token', 'tokenable_id', 'tokenable_type', 'abilities', 'expires_at')->get();

        $token = explode("|",Crypt::decryptString($token));

        $token = $token[1];

        $token = hash('sha256', $token);

        foreach ($tokens as $linha) {
            
            if(hash_equals($token, $linha->token) && in_array("confirm_disable_account", json_decode($linha->abilities))){
                
                if($linha->tokenable_type == Doador::class){

                $dataExpiracao = new DateTime("2023-10-29 10:00:00");

                $dataExpiracao->format("Y-m-d h:m:s");
                
                if($dataExpiracao->diff(now())->y != 0 || $dataExpiracao->diff(now())->m != 0 || $dataExpiracao->diff(now())->d != 0 || $dataExpiracao->diff(now())->h > 4){
                    return "Token expirado";
                }

                    $novoToken = Doador::where('id', $linha->tokenable_id)->first()->createToken("disable_account", ['token_disable_account'], new DateTime(now()->addHours(4)))->plainTextToken;

                    $novoToken = Crypt::encryptString($novoToken);

                    Personal_Access_Tokens::where('id', $linha->id)->delete();

                    return view('Telas2.Confirmar_Desativacao_Doador', ['url' => route("desativarConta", ['token' => $novoToken])]);
                }

            }

        }

        return "Token invalido";


    }

    function desativarConta(Request $request, $token){
        
        $tokens = Personal_Access_Tokens::where('name', "disable_account")->select('id','token', 'tokenable_id', 'tokenable_type', 'abilities')->get();

        $token = explode("|",Crypt::decryptString($token));

        $token = $token[1];

        $token = hash('sha256', $token);

        foreach ($tokens as $linha) {
               
            if(hash_equals($token, $linha->token) && in_array("token_disable_account", json_decode($linha->abilities))){
                
                $dataExpiracao = new DateTime("2023-10-29 10:00:00");

                $dataExpiracao->format("Y-m-d h:m:s");
                
                if($dataExpiracao->diff(now())->y != 0 || $dataExpiracao->diff(now())->m != 0 || $dataExpiracao->diff(now())->d != 0 || $dataExpiracao->diff(now())->h > 4){
                    return "Token expirado";
                }

                if($linha->tokenable_type == Doador::class){
                    Doador::where('id', $linha->tokenable_id)->update([
                        'ativo' => false
                    ]);

                    Personal_Access_Tokens::where('id', $linha->id)->delete();

                    Auth::logout();
    
                    $request->session()->invalidate();
                
                    $request->session()->regenerateToken();
                    
                    return view('Telas2.Conta_Desativada');
                }
                
            }
        }

        return "Token invalido";
    }

    public function atualizarSenha(Request $request){

        Validator::make(

            $request->all(),
            [
                'password' =>  ['required', RulesPassword::min(7)->mixedCase()->symbols()],
                'CadastrarSenha' => ['required', RulesPassword::min(7)->mixedCase()->symbols()]

            ]
        )->validate();

        if(Hash::check($request->password, $request->user()->password)){

            $request->user()->update([

                "password" => Hash::make($request->CadastrarSenha),

            ]);

            return back()->with(["senha-atualizada" => "Senha atualizada com sucesso"]);

        }else{

            return back()->withErrors(["error-password" => "Senha incorreta"]);
        }
        return back()->withErrors(["error-password" => "Erro ao atualizar senha"]);
    }

}
