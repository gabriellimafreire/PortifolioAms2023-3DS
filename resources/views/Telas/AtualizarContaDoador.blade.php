@extends('layout.layout')


@section('vite')
    @vite(['resources/css/AtualizarContaDoador.css'])
@endsection



@section('conteudo')
    <h1>Atualizar dados</h1>
    <div class="container atualizar">
        <div class="row">
            <div class="col-md-4 imagem">
                <div class="img">
                    <img src="{{ Vite::asset('resources/img/Frame 60 (1).png') }}" width="200px" height="200px" alt=""
                        class="img-fluid">
                    <div class="atualizar">
                        <button class="btn btn-primary" type="button">Atualizar imagem</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="{{route("atualizarDoador")}}" method="post">
                @csrf
                <label for="" class="form-label">Nome:</label>
                <input type="text" id="nomedoador" name="Nome" class="form-control  @error('Nome') is-invalid @enderror" value="{{$Doador->Nome}}">
                @error('Nome')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror
                <label for="" class="form-label">Sobrenome:</label>
                <input type="text" id="sobrenomedoador" name="Nome" class="form-control  @error('Nome') is-invalid @enderror" value="{{$Doador->Nome}}">
                @error('Nome')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror
                <label for="" class="form-label">Email:</label>
                <input type="email" name="Email" class="form-control  @error('Email') is-invalid @enderror" value="{{$Doador->email}}">
                @error('Email')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror
                <label for="" class="form-label">Email de contato:</label>
                <input type="email" name="Email_Contato" class="form-control  @error('Email_Contato') is-invalid @enderror " value="{{$Doador->email_contato}}">
                @error('Email_Contato')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror
                <label for=" " class="form-label">CPF:</label>
                <input type="text" id="cpfdoador" name="CPF" class="form-control  @error('CPF') is-invalid @enderror" placeholder="000.000.000-00" value="{{$Doador->Tipo_Documento()->first()->NumeroDocumento}}">
                @error('CPF')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror
                <label for="" class="form-label">Telefone:</label>
                <input type="tel" id="fonedoador" name="Telefone" class="form-control  @error('Telefone') is-invalid @enderror" placeholder="(00) 00000-0000" value="{{$Doador->Telefone->first()->NumeroTelefone}}">
                @error('Telefone')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                    
                <label for="" class="form-label">Data de nascimento:</label>
                <input type="" name="Data" class="form-control  @error('Data') is-invalid @enderror" value="{{$Doador->Tipo_Origem->DataFundNasc}}">
                @error('Data')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror

                <label for="" class="form-label">Endereco:</label>
                <input type="tel" id="fonedoador" name="Endereco" class="form-control  @error('Endereco') is-invalid @enderror" placeholder="(00) 00000-0000" value="{{$Doador->Endereco}}">
                @error('Endereco')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                <div class="submit">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
                </form>
            </div>
            

        </div>
        <div class="row">
            <div class="col">
                @if(session('success-update'))
                <div class="alert alert-success" role="alert">
                    {{session('success-update')}}
                </div>
            @endif
            </div>
        </div>
    </div>
    <h1>Atualizar senha</h1>
    <div class="container senha" style="max-width: 800px!important;">
        <div class="row">
            <div class="col">
            <form action="{{route('atualizarSenha')}}" method="post">
                @csrf
                <div>
                    <label for="" class="form-label">Senha:</label>
                    <input type="password" id="senha" class="form-control @error('password') is-invalid @enderror" placeholder="" name="password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <label for="" class="form-label">Nova Senha:</label>
                    <input type="password" class="form-control @error('CadastrarSenha') is-invalid @enderror" placeholder="" name="CadastrarSenha">
                    @error('CadastrarSenha')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <div class="submit">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if(session('senha-atualizada'))
                        <div class="alert alert-success" >
                            {{ session('senha-atualizada') }}
                        </div>
                    @endif
                   @error('error-password')
                        <div class="alert alert-danger" >
                            {{ $message }}
                        </div>
                    @enderror
            </div>
        </div>
    </div>

    <div class="container desativar">
        <h1>Desativar conta</h1>
        <a href="{{ route('confirmarEmailDesativacao') }}"><button class="btn btn-primary" type="button">Excluir
                conta</button></a>
    </div>

@endsection
