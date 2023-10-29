@extends('layout.layout')


@section('vite')
    @vite(['resources/css/Login.css'])
@endsection



@section('conteudo')

<div class="container logar">
    <div class="row">
        <div class="col header">
            <h6 class="h1">Logar-se</h6>
        </div>
    </div> 
    <div class="row">
        <div class="col">
            <form action="{{route("realizarLogin")}}" method="post">
                @csrf
                <label for="" class="form-label">Email:</label>
                <input type="text" id="nomedoador" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{old('email')}}">
                @error('email')
                    <div class="invalid-feedback">
                            {{$message}}
                    </div>
                @enderror
                <label for="" class="form-label">Senha:</label>
                <input type="text" id="nomedoador" name="password" class="form-control  @error('password') is-invalid @enderror" value="{{old('password')}}">
                @error('password')
                    <div class="invalid-feedback">
                            {{$message}}
                    </div>
                @enderror
                <a href="{{route('password.request')}}" class="mudarSenha">Recuperar senha</a>
                <div class="submit">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection