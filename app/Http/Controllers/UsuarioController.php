<?php
namespace App\Http\Controllers;

use App\Models\Necessidade;
use App\Models\Ong;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class UsuarioController extends Controller
{
   public function loginView(){
        return view('login');
   }
   public function login(Request $request){
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::guard('Doador')->attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    if (Auth::guard('Ong')->attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    return back()->withErrors([
        'email' => 'A senha ou email não coincidem',
    ])->onlyInput('email');
   }

   public function home(Request $request){
    if(Auth::guard('Doador')->check() && Auth::guard('Doador')->user()->ativo){

        return view('index', ['Necessidades' => Necessidade::paginate(15), 'Ongs' => Ong::all()]);

    }else if(Auth::guard('Ong')->check() && Auth::guard('Ong')->user()->ativo == 1){

        return view('telas3.homeong', ['Necessidades' => Auth::guard('Ong')->user()->Necessidade()->paginate(2), "Notificacoes" => Auth::guard('Ong')->user()->notifications]);

    }

    return view('index', ['Necessidades' => Necessidade::paginate(15), 'Ongs' => Ong::all()]);

    
   }

   public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
   }
}

?>