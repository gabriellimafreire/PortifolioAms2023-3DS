
@extends('layout.layout')


@section('vite')
@vite([
    'resources/css/style.css', 
    'node_modules/jquery/dist/jquery.js',
    'node_modules/jquery-mask-plugin/dist/jquery.mask.js',
    'resources/js/funmaskformdoador.js',
    'resources/js/functions.js'
    ])
@endsection



@section('conteudo')
       


<div class="container" style="background-color:#9BF2EA"><br><!-- formulario -->
    <div class="row titulos">
        <div class="col Cadastro">
            <div class="titulo">
                <h4>Cadastre-se</h4>
            </div>
        </div>
    </div>    
    <div class="row">
        <div class="col input">
            <form id="formulario" action="{{route('cadastrarDoador')}}" method="POST">
                <fieldset><!--dadospessoais--->
                    @csrf
                    <h2>Dados Pessoais</h2>
                    <input type="text" class="form-control @error('Nome') is-invalid @enderror" name="Nome" id="nomedoador" placeholder="Nome:" value="{{old('Nome')}}">
                    @error('Nome')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror
                    <br>
                    <input type="text" class="form-control @error('Nome') is-invalid @enderror" name="Nome" id="sobrenomedoador" placeholder="Sobrenome:" value="{{old('Nome')}}">
                    @error('Nome')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror
                    <br>
                    <input type="text" class="form-control @error('Data') is-invalid @enderror" name="Data" id="datanascdoador" placeholder="Data de nascimento:" value="{{old('Data')}}">
                    @error('Data')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror
                    <br>
                    <input type="text" class="form-control @error('CPF') is-invalid @enderror" name="CPF" id="cpfdoador" placeholder="CPF:" value="{{old('CPF')}}">
                    @error('CPF')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror
                    <br>
                    <input type="text" class="form-control @error('Endereco') is-invalid @enderror" name="Endereco" id="enderecodoador" placeholder="Endereço:" value="{{old('Endereco')}}">
                    @error('Endereco')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror
                    <br>
                    <input type="email" class="form-control @error('Email_Contato') is-invalid @enderror" name="Email_Contato" id="emaildoador" placeholder="Email de contato:" value="{{old('Email_Contato')}}">
                    @error('Email_Contato')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror
                    <br>
                    <input type="text" class="form-control @error('Telefone') is-invalid @enderror" name="Telefone" id="fonedoador" placeholder="Telefone:" value="{{old('Telefone')}}">
                    @error('Telefone')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror
                    <br>
                    <button type="button" class="btn btn-success next acao" name="next">Próximo</button>
                </fieldset><!--dadospessoais--->

                <fieldset><!--login&senhaparacadastro--->
                    <h2>Dados de login</h2>
                    <input type="text" class="form-control @error('Email') is-invalid @enderror" name="Email" id="logindoador" placeholder="Email:" value="{{old('Email')}}">
                    @error('Email')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror
                    <br>
                    <input type="password" class="form-control @error('Senha') is-invalid @enderror" name="Senha" id="senha" placeholder="Senha:" value="{{old('Senha')}}">
                    @error('Senha')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror
                    <br>
                    <input type="password" class="form-control @error('Senha_confirmation') is-invalid @enderror" name="Senha_confirmation"id="confirmsenha" placeholder="Confirmar senha:" value="{{old('Senha_confirmation')}}">
                    @error('Senha_confirmation')
                        <div class="invalid-feedback">
                                {{$message}}
                        </div>
                    @enderror
                    <br>
                    <button type="button" class="btn btn-success prev acao" name="prev">Anterior</button>
                    <button type="submit" class="btn btn-success next acao" name="next">Cadastrar</button>
                </fieldset><!--login&senhaparacadastro--->

                </form>
            </div>
        </div>
    </div><!-- formulario -->
    <br><br><br><br>

@endsection