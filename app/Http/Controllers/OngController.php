<?php   

namespace App\Http\Controllers;

use App\Mail\DesativarConta;
use App\Mail\DesativarContaOng;
use App\Models\Ong;
use App\Models\Personal_Access_Tokens;
use App\Models\Preferencia;
use App\Models\Representante_Legal;
use App\Models\RepresentanteLegal;
use App\Models\Seguimento;
use App\Models\Telefone_Ong;
use App\Rules\cnpj;
use App\Rules\cpf;
use App\Rules\dataNascimento;
use App\Rules\rg;
use App\Rules\telefone;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class OngController extends Controller
{
    public function cadastrarOngView(){
        return view('cadastrarONG', ['Seguimento' => Seguimento::all()]);
    }

    public function cadastrarOng(Request $request){
        
        $dados = Validator::make(
            $request->all(),
            [
                "NomeOng" => "required|string|min:7|max:70",
                "DataFundacao" => "required|date",
                "CNPJ" => ['required', 'string', 'min:18', 'max:18', new cnpj()],
                "CausaApoia"=> ['required', 'integer', Rule::exists('Seguimento', 'id')],
                "Descricao" => "required|string|min:30|max:100",
                "Horario" => "required|string|min:4|max:40",
                "EnderecoOng" => "required|string|min:20|max:100",
                "email_contato" => "required|email|min:10|max:70|unique:ong|unique:doador",
                "email" => "required|email|min:10|max:70|unique:doador|unique:ong|unique:representante_legal",
                "TelefoneOng" => ['required', 'min:15', 'max:30', new telefone()],
                "NomeRepresentanteLegal" => "required|string|min:10|max:40",
                "EmailRepresentante" =>  ["required", "min:10", "max:70", 'email', Rule::unique("ong", "email"), Rule::unique("representante_legal", "email")],
                "DataNascimentoRepresentante"=> ['required','date', new dataNascimento()],
                "EnderecoRepresentante" => "required|string|min:20|max:100",
                "CPFRepresentante" => ['required', 'min:14', 'max:14', new cpf],
                "RGRepresentante" => ['required', 'min:12', 'max:12', new rg],
                "TelefoneRepresentante" => ['required', 'min:15', 'max:30', new telefone()],
                "password" => ['required', Password::min(7)->mixedCase()->symbols(), 'confirmed']
            ]

        )->validate();

        // cadastro representante legal

        $Representante_Legal = new RepresentanteLegal();

        $Representante_Legal->NomeCompleto = $dados['NomeRepresentanteLegal'];

        $Representante_Legal->CPF = $dados['CPFRepresentante'];

        $Representante_Legal->RG = $dados['RGRepresentante'];

        $Representante_Legal->Endereco = $dados['EnderecoRepresentante'];

        $Representante_Legal->email = $dados['EmailRepresentante'];

        $Representante_Legal->DataNascimento = $dados['DataNascimentoRepresentante'];

        $Representante_Legal->save();

        // cadastro ONG

        $ONG = new Ong();

        $ONG->NomeFantasia = $dados['NomeOng'];

        $ONG->DataFundacao = $dados['DataFundacao'];

        $ONG->representante_id = $Representante_Legal->id;

        $ONG->CNPJ = $dados['CNPJ'];

        $ONG->HoraDia = $dados['Horario'];

        $ONG->SobreOng = $dados['Descricao'];

        $ONG->email = $dados['email'];

        $ONG->email_contato = $dados['email_contato'];

        $ONG->password = Hash::make($dados['password']);

        $ONG->seguimento_id = $dados['CausaApoia'];

        $ONG->ativo = true;

        $ONG->save();

        $ONG->Endereco_Ong()->create([
            'endereco' => $dados['EnderecoOng']
        ]);

        $ONG->Telefone_Ong()->create([
            'NumeroTelefone' => $dados['TelefoneOng'],
            'Descricao' => "celular"
        ]);

        $Representante_Legal->Telefone_Representante()->create([
            'NumeroTelefone' => $dados['TelefoneRepresentante'],
            'Descricao' => "celular"
        ]);

        
        if(Auth::guard('Ong')->attempt(['email' => $dados['email'], 'password' => $dados['password']])){
            $request->user()->sendEmailVerificationNotification();
            redirect('/');
        }else{
            return back()->withErrors("Erro ao realizar cadastro");
        }

    }

    public function atualizarDadosOngView(Request $request){
        return view('Telas.AtualizarONG', ["usuario" => $request->user(), 'Seguimento' =>Seguimento::all()]);
    }

    public function atualizarDadosOng(Request $request){
        $dados = Validator::make(
            $request->all(),
            [
            "NomeOng" => "required|string|min:7|max:70",
            "DataFundacao" => "required|date",
            "CNPJ" => ['required', 'string', 'min:18', 'max:18', new cnpj()],
            "CausaApoia"=> "required|string|min:1|max:50",
            "Descricao" => "required|string|min:30|max:100",
            "Horario" => "required|string|min:4|max:40",
            "email_contato" => ["required", "email", "min:10", "max:70", Rule::unique('Ong')->ignore($request->user()->id), "unique:Doador", Rule::unique('representante_legal', 'email')],
            "email" => ["required", "email", "min:10", "max:70", "unique:Doador", "unique:Representante_Legal", Rule::unique('Ong')->ignore($request->user()->id)],
        ])->validate();

        $request->user()->update([
            'NomeFantasia' => $request->NomeOng,
            'DataFundacao' => $request->DataFundacao,
            'CNPJ' => $request->CNPJ,
            'HoraDia' => $request->Horario,
            "SobreOng" => $request->Descricao,
            "email" => $request->email,
            "email_contato" => $request->email_contato,
            "seguimento_id" => $request->CausaApoia
        ]);

        return back()->with(["success-atualizar-ong" => "Dados atualizados com sucesso"]);
    }

    public function atualizarRepresentanteLegal(Request $request){
        $dados = Validator::make(
            $request->all(),
            [
            "NomeRepresentanteLegal" => "required|string|min:10|max:40",
            "EmailRepresentante" =>  ["required", "min:10", "max:70", 'email', Rule::unique("ong", "email"), Rule::unique("representante_legal", "email")->ignore($request->user()->RepresentanteLegal->id)],
            "DataNascimentoRepresentante"=> ['required','date', new dataNascimento()],
            "EnderecoRepresentante" => "required|string|min:20|max:100",
            "CPFRepresentante" => ['required', 'min:14', 'max:14', new cpf],
            "RGRepresentante" => ['required', 'min:12', 'max:12', new rg],
            "TelefoneRepresentante" => ['required', 'min:15', 'max:30', new telefone()],
            ])->validate();

            $request->user()->RepresentanteLegal->update([
                "NomeCompleto" => $request->NomeRepresentanteLegal,
                "DataNascimento" => $request->DataNascimentoRepresentante,
                "CPF" => $request->CPFRepresentante,
                "RG" => $request->RGRepresentante,
                "Endereco" => $request->EnderecoRepresentante,
                "email" => $request->EmailRepresentante
            ]);

            $request->user()->RepresentanteLegal->Telefone_Representante->first()->update([
                "NumeroTelefone" => $request->TelefoneRepresentante
            ]);

            return back()->with(["success-atualizar-RepresentanteLegal" => "Dados do representante legal atualizados"]);
    }

    public function cadastrarTelefone(Request $request){
            $dados = Validator::make(
                $request->all(),
                [
                    "Telefone" => ['required', 'min:15', 'max:30', new telefone()],
                    "Descricao" => ["required", "min:5", "max:45"],
                ])->validate();

            $telefone = $request->user()->Telefone_Ong();

            if($telefone->count() >= 5){
                return back()->withErrors(['update-telefone' => "Numero maximo de telefones cadastrados"]);
            }
            
            $request->user()->Telefone_Ong()->create([
                "NumeroTelefone" => $request->Telefone,
                "Descricao" => $request->Descricao
            ]);

            return back()->with(["success-cadastrar-telefone" => "Cadastro de telefone realizado com sucesso"]);


    }

    public function atualizarTelefone(Request $request){
        $dados = Validator::make(
            $request->all(),
            [
                "id"  => "required|integer",
                "Telefone" => ['required', 'min:15', 'max:30', new telefone()],
                "Descricao" => ["required", "min:5", "max:45"],
            ])->validate();

        $telefone = $request->user()->Telefone_Ong()->where('id', $request->id);
        

        if($telefone->exists()){
            $telefone->update([
                "NumeroTelefone" => $request->Telefone,
                "Descricao" => $request->Descricao
            ]);
            return back()->with(["success-atualizar-telefone" => "Telefone atualizado com sucesso"]);
        }else{
            return back()->withErrors(["update-telefone" => "telefone não cadastrado"]);
        }

        return back()->withErrors(["update-telefone" => "Erro ao cadastrar telefone"]);
    }

    public function excluirTelefone(Request $request){
        $dados = Validator::make(
            $request->all(),
            [
                "id"  => "required|integer"
            ])->validate();

        $telefone = $request->user()->Telefone_Ong()->where('id', $request->id);

        if($telefone->exists()){
            $telefone->first()->delete();

            return back()->with(['success-excluir-telefone', 'Telefone excluido com sucesso']);
        }else{
            return back()->withErrors(['delete-telefone' => 'Telefone não cadastrado']);
        }

        return back()->withErrors(['delete-telefone' => 'Erro ao excluir telefone']);

        
    }

    public function cadastrarEndereco(Request $request){
        $dados = Validator::make(
            $request->all(),
            [
                'endereco' => "required|string|min:10|max:40"
            ]
        )->validate();

        $endereco = $request->user()->Endereco_Ong();

        if($endereco->count() >= 3){
            return back()->withErrors(['create-endereco' => 'Numero maximo de endereços cadastrados']);
        }

        $request->user()->Endereco_Ong()->create([
            "endereco" => $request->endereco
        ]);

        return back()->with(['success-cadastrar-endereco' => "Endereço cadastrado com sucesso"]);
    }

    public function atualizarEndereco(Request $request){
        $dados = Validator::make(
            $request->all(),
            [
                'id' => "required|integer",
                'endereco' => "required|string|min:10|max:40"
            ]
        )->validate();

        $endereco = $request->user()->Endereco_Ong()->where('id', $request->id);

        if($endereco->exists()){
            $request->user()->Endereco_Ong()->where('id', $request->id)->update([
                'Endereco' => $request->endereco
            ]);
            return back()->with(['success-atualizar-endereco' => 'Endereco atualizado com sucesso']);
        }else{
            return back()->withErrors(['update-endereco' => "Endereço não cadastrado"]);
        }

        return back()->withErrors(['update-endereco' => "Erro ao atualizar endereco"]);
    }

    public function excluirEndereco(Request $request){
        $dados = Validator::make(
            $request->all(),
            [
                'id' => 'required|integer'
            ]
            )->validate();

        $endereco = $request->user()->Endereco_Ong()->where('id', $request->id);

        if($endereco->exists()){
            $endereco->first()->delete();

            return back()->with(['success-excluir-endereco' => 'Enderec o escluido com sucesso']);
        }else{
            return back()->withErrors(['delete-endereco' => "Endereço não existe"]);
        
        
        return back()->withErrors(['delete-endereco' => "Erro ao cadastrar excluir endereco"]);}
    }


    public function confirmarEmailDesativacao(Request $request){
        $tokens = Personal_Access_Tokens::where('name', 'confirmate_disable_account')->where('tokenable_id', $request->user()->id)->where('tokenable_type', $request->user()::class)->delete();

        $tokens = Personal_Access_Tokens::where('name', 'disable_account')->where('tokenable_id', $request->user()->id)->where('tokenable_type', $request->user()::class)->delete();

        $token = $request->user()->createToken("confirmate_disable_account", ["confirm_disable_account"], new DateTime(now()->addHours(4)));

        $token = Crypt::encryptString($token->plainTextToken);

        Mail::to($request->user())->send(new DesativarContaOng($token));

        return view('Telas2.Confirmar_E-mail_Doador');

    }

    public function confirmarDesativacao($token){

        $tokens = Personal_Access_Tokens::where('name', "confirmate_disable_account")->select('id','token', 'tokenable_id', 'tokenable_type', 'abilities')->get();

        $token = explode("|",Crypt::decryptString($token));

        $token = $token[1];

        $token = hash('sha256', $token);

        foreach ($tokens as $linha) {
            
            if(hash_equals($token, $linha->token) && in_array("confirm_disable_account", json_decode($linha->abilities))){
                
                if($linha->tokenable_type == Ong::class){

                    $dataExpiracao = new DateTime("2023-10-29 10:00:00");

                    $dataExpiracao->format("Y-m-d h:m:s");

                    if($dataExpiracao->diff(now())->y != 0 || $dataExpiracao->diff(now())->m != 0 || $dataExpiracao->diff(now())->d != 0 || $dataExpiracao->diff(now())->h > 4){
                        return "Token expirado";
                    }

                    $novoToken = Ong::where('id', $linha->tokenable_id)->first()->createToken("disable_account", ['token_disable_account'], new DateTime(now()->addHours(4)))->plainTextToken;

                    $novoToken = Crypt::encryptString($novoToken);

                    Personal_Access_Tokens::where('id', $linha->id)->delete();
              
                    return view('Telas2.Confirmar_Desativacao_Doador', ['url' => route("desativarContaOng", ['token' => $novoToken])]);
                }

            }

        }

        return "Token invalido";


    }

    function desativarConta(Request $request,$token){
        
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

                if($linha->tokenable_type == Ong::class){
                    Ong::where('id', $linha->tokenable_id)->update([
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
                'password' =>  ['required', Password::min(7)->mixedCase()->symbols()],
                'CadastrarSenha' => ['required', Password::min(7)->mixedCase()->symbols()]

            ]
        )->validate();

        if(Hash::check($request->password, $request->user()->password)){

            $request->user()->update([

                "password" => Hash::make($request->CadastrarSenha),

            ]);

            return back()->with(["senha-atualizada" => "Senha atualizada com sucesso"]);

        }else{

            return back()->withErrors(["error-password" => 'Senha incorreta']);
        }
        return back()->withErrors(["error-password" => 'Não foi possivel aalterar a senha']);
    }

    public function listarNecessidadesCadastradas(Request $request){
        return view('Telas.NecessidadesDaOng', ['Necessidades' => $request->user()->Necessidade()->get()]);
    }



}
