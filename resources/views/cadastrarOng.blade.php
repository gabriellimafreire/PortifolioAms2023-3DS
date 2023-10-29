@extends('layout.layout')


@section('vite')
    @vite([
        'resources/css/style.css', 
        'node_modules/jquery/dist/jquery.js',
        'node_modules/jquery-mask-plugin/dist/jquery.mask.js',
        'resources/js/funmaskformong.js',
        'resources/js/functions.js'
        ])
@endsection



@section('conteudo')

       
</head>
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
            <form id="formulario" action="{{route("cadastrarOng")}}" method="POST">
                @csrf
                <fieldset><!--dadospessoais--->
                    <h2>Dados da ONG</h2>
                    <input type="text" class="form-control @error('NomeOng') is-invalid @enderror" name="NomeOng" id="nomeong" placeholder="Nome da ONG:" value="{{old('NomeOng')}}">
                    @error('NomeOng')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <br>
                    <input type="text" class="form-control @error('DataFundacao') is-invalid @enderror" name="DataFundacao" placeholder="Data de fundação:" value="{{old('DataFundacao')}}">
                    @error('DataFundacao')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <br>
                    <input type="text" class="form-control @error('email_contato') is-invalid @enderror" name="email_contato" placeholder="Email de contato:" value="{{old('email_contato')}}"> 
                    @error('email_contato')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <br>
                    <input type="text" class="form-control @error('CNPJ') is-invalid @enderror" name="CNPJ" id="cnpjong" placeholder="CNPJ:" value="{{old('CNPJ')}}">
                    @error('CNPJ')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <br>
                    <select name="CausaApoia" class="form-select @error('CausaApoia') is-invalid @enderror" value="{{old('CausaApoia')}}">
                        <option selected disabled>Escolha uma categoria</option>
                        @foreach ($Seguimento as $seguimento)
                            <option value="{{$seguimento->id}}">{{$seguimento->NomeSeguimento}}</option>
                        @endforeach
                    </select>
                    @error('CausaApoia')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <br>
                    <input type="text" class="form-control @error('Descricao') is-invalid @enderror" name="Descricao" id="historia" placeholder="História:" value="{{old('Descricao')}}">
                    @error('Descricao')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <br>
                    <input type="text" class="form-control @error('TelefoneOng') is-invalid @enderror" name="TelefoneOng" placeholder="Telefone da ONG:" value="{{old('TelefoneOng')}}">
                    @error('TelefoneOng')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <br>
                    <input type="text" class="form-control @error('Horario') is-invalid @enderror" name="Horario" id="hora" placeholder="Horário de funcionamento:" value="{{old('Horario')}}">
                    @error('Horario')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <br>
                    <input type="text" class="form-control @error('EnderecoOng') is-invalid @enderror" name="EnderecoOng" id="endereco" placeholder="Endereço:" value="{{old('EnderecoOng')}}">
                    @error('EnderecoOng')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <br>
                    <button type="button" class="btn btn-success next acao" name="next">Próximo</button>
                </fieldset><!--dadospessoais--->

                    <fieldset><!--meiosdecontatos--->
                        <h2>Dados do responsavel legal</h2>
                        <input type="text" class="form-control @error('NomeRepresentanteLegal') is-invalid @enderror" name="NomeRepresentanteLegal" id="nomerepresentante" placeholder="Nome Completo:" value="{{old('NomeRepresentanteLegal')}}">
                        @error('NomeRepresentanteLegal')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                        <br>
                        <input type="text" class="form-control @error('EmailRepresentante') is-invalid @enderror" name="EmailRepresentante" id="" placeholder="Email:" value="{{old('EmailRepresentante')}}">
                        @error('EmailRepresentante')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                        <br>
                        <input type="text" class="form-control @error('DataNascimentoRepresentante') is-invalid @enderror" name="DataNascimentoRepresentante"
                            id="datanascrepresentante" placeholder="Data de nascimento:" value="{{old('DataNascimentoRepresentante')}}">
                        @error('DataNascimentoRepresentante')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                        <br>
                        <input type="text" class="form-control @error('EnderecoRepresentante') is-invalid @enderror" name="EnderecoRepresentante"
                            id="comprovrepresentante"placeholder="Comprovante de endereço:" value="{{old('EnderecoRepresentante')}}">
                        @error('EnderecoRepresentante')
                             <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                        <br>   
                        <input type="text" class="form-control @error('CPFRepresentante') is-invalid @enderror" name="CPFRepresentante" id="cpfrepresentante" placeholder="CPF:" value="{{old('CPFRepresentante')}}">
                        @error('CPFRepresentante')
                             <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                        <br>
                        <input type="text" class="form-control @error('RGRepresentante') is-invalid @enderror" name="RGRepresentante" id="rgrepresentante" placeholder="RG:" value="{{old('RGRepresentante')}}">
                        @error('RGRepresentante')
                             <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                        <br>
                        <input type="text" class="form-control @error('TelefoneRepresentante') is-invalid @enderror" name="TelefoneRepresentante" id="telrepresentante" placeholder="Telefone representante:" value="{{old('TelefoneRepresentante')}}">
                        @error('TelefoneRepresentante')
                             <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                        <br>
                        <br>
                        <button type="button" class="btn btn-success prev acao" name="prev">Anterior</button>
                        <button type="button" class="btn btn-success next acao" name="next">Próximo</button>
                    </fieldset><!--meiosdecontatos--->
                    
                    <fieldset>
                        <h2>Dados de login</h2>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="nomedoador" placeholder="Email:" value="{{old('email')}}">
                        @error('email')
                             <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                        <br>
                        <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" id="sobrenomedoador" placeholder="Senha:" value="{{old('password')}}">
                        @error('password')
                             <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                        <br>
                        <input type="text" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="sobrenomedoador" placeholder="Senha:" value="{{old('password_confirmation')}}">
                        @error('password_confirmation')
                             <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                        <br>
                        <button type="button" class="btn btn-success prev acao" name="prev">Anterior</button>
                        <button type="submit" class="btn btn-success next acao" name="next">Próximo</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div><!-- formulario -->
    <br>
@endsection
