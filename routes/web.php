<?php

use App\Http\Controllers\ConversaController;
use App\Http\Controllers\DoacoesController;
use App\Http\Controllers\DoadorController;
use App\Http\Controllers\NecessidadeController;
use App\Http\Controllers\OngController;
use App\Http\Controllers\UsuarioController;
use App\Http\Middleware\Ativo;
use App\Models\Doador;
use App\Models\Ong;
use Dflydev\DotAccessData\Data;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password as RulesPassword;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// publicos

Route::get('/', [UsuarioController::class, 'home'])->name("home");

Route::get('login', [UsuarioController::class, 'loginView'])->name("login");

Route::post('login', [UsuarioController::class, 'login'])->name("realizarLogin");

Route::prefix('doador')->group(function(){
    
    Route::get('cadastrarDoador', [DoadorController::class, 'cadastrarDoadorView'])->name("cadastrarDoadorView");

    Route::post('cadastrarDoador', [DoadorController::class, 'cadastrarDoador'])->name("cadastrarDoador");

    Route::get('atualizarDoador', [DoadorController::class, 'atualizarDoadorView'])->name("atualizarDoador")->middleware(['auth:Doador', Ativo::class]);

    Route::post('atualizarDoador', [DoadorController::class, 'atualizarDoador'])->name("atualizarDoador")->middleware(['auth:Doador', Ativo::class]);

    Route::get('confirmarEmailDesativacao', [DoadorController::class, 'confirmarEmailDesativacao'])->middleware(['auth:Doador', Ativo::class])->name("confirmarEmailDesativacao");

    Route::get('confirmarDesativacao/{token}', [DoadorController::class, 'confirmarDesativacao'])->name("confirmarDesativacao");

    Route::get('desativarConta/{token}', [DoadorController::class, 'desativarConta'])->name("desativarConta");

    Route::post('atualizarSenha', [DoadorController::class, 'atualizarSenha'])->middleware(['auth:Doador', Ativo::class])->name("atualizarSenha");

    Route::get('listarDoacoes', [DoacoesController::class, 'listarDoacoes'])->name("DoacoesRealizadas")->middleware(['auth:Doador', Ativo::class]);

});

Route::prefix('usuario')->group(function(){

    Route::get('quemSomos', [UsuarioController::class, 'QuemSomos'])->name("QuemSomos");

    Route::get('informacoes', [UsuarioController::class, 'Informacoes'])->name("Informacoes");

    Route::get('/confirmar-senha', function () {
        return view('auth.confirm-password');
    })->middleware([Ativo::class])->name('password.confirm');

    Route::post('/confirmar-senha', function (Request $request) {
        if (! Hash::check($request->password, $request->user()->password)) {
            return back()->withErrors([
                'password' => ['The provided password does not match our records.']
            ]);
        }
     
        $request->session()->passwordConfirmed();
     
        return redirect()->intended();
    })->middleware([Ativo::class, 'throttle:6,1']);

    Route::get('logout', [UsuarioController::class, 'logout'])->name("logout");

    
});

Route::prefix('conversa')->group(function(){

    Route::get('listarConversas', [ConversaController::class, "listarConversas"])->name("ListarConversas");

    Route::get('telaMensagens/{id}', [ConversaController::class, 'listarMensagens']);

});

Route::prefix('doacoes')->group(function(){

    Route::get('escolherValor/{metodo}/{id_necessidade}', [DoacoesController::class, 'escolherValor'])->middleware([Ativo::class]);

    Route::post('realizarPagamento', [DoacoesController::class, 'realizarPagamaneto'])->middleware([Ativo::class]);

    Route::get('cancelarDoacao', [DoacoesController::class, 'cancelarDoacaoView'])->middleware([Ativo::class]);

    Route::post('cancelarDoacao', [DoacoesController::class, 'cancelarDoacao'])->middleware([Ativo::class]);

    Route::get('doacaoRealizada', [DoacoesController::class, 'doacaoRealizada'])->middleware([Ativo::class]);

    Route::get('cadastrarDoacaoMaterial/{id_necessidade}', [DoacoesController::class, 'cadastrarDoacaoMaterialView'])->middleware([Ativo::class]);

    Route::post('cadastrarDoacaoMaterial/', [DoacoesController::class, 'cadastrarDoacaoMaterial'])->name("cadastrarDoacaoMaterial")->middleware([Ativo::class]);

    Route::get('visualizarDoacaoRecebida/{id}', [DoacoesController::class, 'listarDoacaoRecebida'])->middleware(['auth:Ong', Ativo::class]);

    Route::get('visualizarDoacaoRealizada/{id}', [DoacoesController::class, 'listarDoacaoRealizada'])->middleware(['auth:Doador', Ativo::class]);
    

    


});

Route::prefix('necessidade')->group(function(){

    Route::get('listarNecessidades', [NecessidadeController::class, 'listarNecessidade'])->name("ListarNecessidades");

    Route::get('pesquisarNecessidade/{necessidade}', [NecessidadeController::class, 'pesquisarNecessidade'])->middleware([Ativo::class]);

    Route::get('cadastrarNecessidade', [NecessidadeController::class, 'cadastrarNecessidadeView'])->middleware([Ativo::class, 'auth:Ong'])->name("cadastrarNecessidade");

    Route::post('cadastrarNecessidade', [NecessidadeController::class, 'cadastrarNecessidade'])->middleware(['auth:Ong',Ativo::class]);

    Route::get('atualizarNecessidade/{id}', [NecessidadeController::class, 'atualizarNecessidadeView'])->middleware(['auth:Ong', Ativo::class])->name("atualizarNecessidadeView");

    Route::post('atualizarNecessidade/{id}', [NecessidadeController::class, 'atualizarNecessidade'])->middleware(['auth:Ong',Ativo::class])->name("atualizarNecessidade");

    Route::get('desativarNecessidade/{id}', [NecessidadeController::class, 'excluirNecessidade'])->middleware(['auth:Ong', Ativo::class]);


});


Route::prefix('ong')->group(function(){

    Route::get('atualizarDadosOng', [OngController::class, 'atualizarDadosOngView'])->middleware(['auth:Ong', Ativo::class])->name("atualizarOngView");

    Route::post('atualizarDadosOng', [OngController::class, 'atualizarDadosOng'])->name("atualizarOng")->middleware(['auth:Ong', Ativo::class]);

    Route::post('atualizarRepresentanteLegal', [OngController::class, 'atualizarRepresentanteLegal'])->middleware(['auth:Ong', Ativo::class])->name("atualizarRepresentanteLegal");

    Route::get('cadastrarOng', [OngController::class, 'cadastrarOngView'])->name("cadastrarOngView")->middleware('guest');

    Route::post('cadastrarOng', [OngController::class,  'cadastrarOng'])->name("cadastrarOng")->middleware('guest');

    Route::get('confirmarEmailDesativacao', [OngController::class, 'confirmarEmailDesativacao'])->name("confirmarEmailDesativacaoOng")->middleware(['auth:Ong']);

    Route::get('confirmarDesativacao/{token}', [OngController::class, 'confirmarDesativacao'])->name("confirmarDesativacaoOng")->middleware(['auth:Ong']);

    Route::get('desativarConta/{token}', [OngController::class, 'desativarConta'])->name("desativarContaOng")->middleware(['auth:Ong']);

    Route::get('listarOng/{id}', [OngController::class, 'listarOng']);

    Route::get('listarOngsParceiras', [OngController::class, 'listarOngsParceiras'])->name("ListarONGs");

    Route::get('listarDoacoesRecebidas', [OngController::class, 'listarDoacoesRecebidas'])->middleware(['auth:Ong', Ativo::class]);

    Route::get('NecessidadesCadastradas', [OngController::class, 'listarNecessidadesCadastradas'])->middleware(['auth:Ong', Ativo::class])->name("listarNecessidadesCadastradas");

    Route::post('cadastrarTelefone', [OngController::class, 'cadastrarTelefone'])->name("cadastrarTelefoneOng")->middleware("auth:Ong")->middleware(['auth:Ong', Ativo::class]);

    Route::post('atualizarTelefone', [OngController::class, 'atualizarTelefone'])->name("atualizarTelefoneOng")->middleware("auth:Ong")->middleware(['auth:Ong', Ativo::class]);

    Route::post('excluirTelefone', [OngController::class, 'excluirTelefone'])->name("excluirTelefoneOng")->middleware("auth:Ong")->middleware(['auth:Ong', Ativo::class]);

    Route::post('cadastrarEndereco', [OngController::class, 'cadastrarEndereco'])->name("cadastrarEnderecoOng")->middleware("auth:Ong")->middleware(['auth:Ong', Ativo::class]);

    Route::post('atualizarEndereco', [OngController::class, 'atualizarEndereco'])->name("atualizarEnderecoOng")->middleware("auth:Ong")->middleware(['auth:Ong', Ativo::class]);

    Route::post('excluirEndereco', [OngController::class, 'excluirEndereco'])->name("excluirEnderecoOng")->middleware("auth:Ong")->middleware(['auth:Ong', Ativo::class]);

    Route::post('atualizarSenha', [OngController::class, 'atualizarSenha'])->middleware('auth:Ong')->name("atualizarSenhaOng")->middleware(['auth:Ong', Ativo::class]);
});


Route::get("teste", function(){
    return view('Telas3.logoutefetuado', ['name' => "ola"]);
});

// redefinição de senha

Route::get('/senha-perdida', function () {
    return view('Telas3.RecuperacaoSenha');
})->middleware('guest')->name('password.request');

Route::post('/senha-perdida', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $emailDoador = Doador::where('email', $request->email)->count();

    $emailOng = Ong::where('email', $request->email)->count();

    $status = 0;

    if($emailDoador == 1){
        $status = Password::broker("Doador")->sendResetLink(
            $request->only('email')
        );
    }elseif ($emailOng == 1){
        $status = Password::broker("Ong")->sendResetLink(
            $request->only('email')
        );
    }else{
        return back()->withErrors(['email' => "Email não cadastrado"]);
    }

    return $status === Password::RESET_LINK_SENT
                ? back()->withErrors(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/atualizar-senha/{token}', function (string $token, Request $request) {
    return view('Telas3.recuperacaodesenha2', ['token' => $token, 'email' => $request->email]);
})->middleware('guest')->name('password.reset');

Route::post('/atualizar-senha', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => ['required', RulesPassword::min(7)->mixedCase()->symbols(), 'confirmed'],
    ]);

    $emailDoador = Doador::where('email', $request->email)->count();

    $emailOng = Ong::where('email', $request->email)->count();

    $status = 0;
 
    if($emailDoador == 1){

        $status = Password::broker('Doador')->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (Doador $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
    
                $user->save();
    
                event(new PasswordReset($user));
            }
        );

    }elseif($emailOng == 1){
        
        $status = Password::broker('Ong')->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (Ong $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
    
                $user->save();
    
                event(new PasswordReset($user));
            }
        );

    }else{

        return back()->withErrors(['email' => "Email incorreto"]);

    }
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

//verificação do email

Route::get('/verificarEmail', function () {
    return view('verificar_email');
})->name('verification.notice');

Route::get('/verificarEmail/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/enviar-confirmacao', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');



?>