@extends('layout.layout')


@section('vite')
@vite([
    'resources/css/AtualizarONG.css', 
    'node_modules/jquery/dist/jquery.js',
    'node_modules/jquery-mask-plugin/dist/jquery.mask.js',
    'resources/js/funmaskatualizarOng.js'
    ])
@endsection



@section('conteudo')
   

<h1>Atualizar dados</h1>
    <div class="container-sm atualizar">
        <div class="row">
            <div class="col imagem">
                <div class="img">
                    <img src="{{Vite::asset('resources/img/Frame 60 (1).png')}}"  min-width="200px" min-height="200px" alt="" class="img-fluid">
                    <div class="atualizar">
                        <button class="btn btn-primary" type="button">Atualizar imagem</button>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <form action="{{route('atualizarOng')}}" method="post">
                    @csrf
                <label for="" class="form-label">Nome da ONG:</label>
                <input type="text" id="nomeOng" class="form-control @error('NomeOng') is-invalid @enderror" name="NomeOng" value="{{$usuario->NomeFantasia}}">
                @error('NomeOng')
                    <div class="invalid-feedback">
                        {{$message}}
                  </div>
                @enderror
                <label for="" class="form-label">Email:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$usuario->email}}">
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                  </div>
                @enderror
                <label for="" class="form-label">Email contato:</label>
                <input type="email" class="form-control @error('email_contato') is-invalid @enderror" name="email_contato" value="{{$usuario->email_contato}}">
                @error('email_contato')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <label for="" class="form-label">CNPJ:</label>
                <input type="text" id="cpnjOng" class="form-control @error('CNPJ') is-invalid @enderror" name="CNPJ" value="{{$usuario->CNPJ}}">
                @error('CNPJ')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <label for="" class="form-label">Descrição:</label>
                <input type="text" id="descOng" class="form-control @error('Descricao') is-invalid @enderror" name="Descricao" value="{{$usuario->SobreOng}}">
                @error('Descricao')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <label for="" class="form-label">Data de fundação:</label>
                <input type="text"  class="form-control @error('DataFundacao') is-invalid @enderror" name="DataFundacao" value="{{$usuario->DataFundacao}}">
                @error('DataFundacao')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <label for="" class="form-label">Horário de funcionamento:</label>
                <input type="text" id="funcionamentojOng" class="form-control @error('Horario') is-invalid @enderror" name="Horario" value="{{$usuario->HoraDia}}">
                @error('Horario')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <label for="" class="form-label">Causa que apoia:</label>
                <select name="CausaApoia" class="form-control @error('CausaApoia') is-invalid @enderror">
                    @foreach ($Seguimento as $seguimento)
                        <option value="{{$seguimento->id}}" @selected($usuario->seguimento_id === $seguimento->id)>{{$seguimento->NomeSeguimento}}</option>
                    @endforeach
                </select>
                @error('CausaApoia')
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
                @if(session('success-atualizar-ong'))
                    <div class="alert alert-success" role="alert">
                        {{session('success-atualizar-ong')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <h1>Dados do responsável legal:</h1>
        <div class="container-sm responsavelLegal">
            <div class="row">
                <div class="col">
                    <form action="{{route('atualizarRepresentanteLegal')}}" method="post">
                        @csrf
                    <label for="" class="form-label">Nome:</label>
                    <input type="text" id="datanascrepresentante" name="NomeRepresentanteLegal" class="form-control @error('NomeRepresentanteLegal') is-invalid @enderror"  value="{{$usuario->RepresentanteLegal->NomeCompleto}}">
                    @error('NomeRepresentanteLegal')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <label for="" class="form-label">Email:</label>
                    <input type="email" class="form-control @error('EmailRepresentante') is-invalid @enderror" name="EmailRepresentante" value="{{$usuario->RepresentanteLegal->email}}">
                    @error('EmailRepresentante')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <label for="" class="form-label">Data de nascimento:</label>
                    <input type="text" class="form-control @error('DataNascimentoRepresentante') is-invalid @enderror" name="DataNascimentoRepresentante" value="{{$usuario->RepresentanteLegal->DataNascimento}}">
                    @error('DataNascimentoRepresentante')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <label for="" class="form-label">Comprovante de endereço:</label>
                    <input type="text" id="comprovrepresentante" class="form-control @error('EnderecoRepresentante') is-invalid @enderror" name="EnderecoRepresentante" value="{{$usuario->RepresentanteLegal->Endereco}}">
                    @error('EnderecoRepresentante')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <label for="" class="form-label ">CPF:</label>
                    <input type="text" id="cpfrepresentante" class="form-control  @error('CPFRepresentante') is-invalid @enderror" placeholder="000.000.000-00" name="CPFRepresentante" value="{{$usuario->RepresentanteLegal->CPF}}">
                    @error('CPFRepresentante')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <label for="" class="form-label">RG:</label>
                    <input type="text" id="rgrepresentante" class="form-control @error('RGRepresentante') is-invalid @enderror" placeholder="00.000.000-0" name="RGRepresentante" value="{{$usuario->RepresentanteLegal->RG}}">
                    @error('RGRepresentante')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <label for="" class="form-label ">Telefone:</label>
                    <input type="tel"  id="telrepresentante" class="form-control @error('TelefoneRepresentante') is-invalid @enderror" placeholder="(00) 00000-0000" name="TelefoneRepresentante" value="{{$usuario->RepresentanteLegal->Telefone_Representante()->first()->NumeroTelefone}}">
                    @error('TelefoneRepresentante')
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
                    @if(session('success-atualizar-RepresentanteLegal'))
                        <div class="alert alert-success" >
                            {{ session('success-atualizar-RepresentanteLegal') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

                

        <div class="container-sm tabela">
            <div class="row">
                <div class="col">
                    <h2>Seus telefones</h2>
                </div>
            </div>
        
            <div class="row lista">
                <div class="col">
                <table class="table"> 
                    <thead>
                        <tr>
                            <th>Número</th>
                            <th>Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuario->Telefone_Ong as $telefone)
                            <tr>
                                <td>{{$telefone->NumeroTelefone}}</td>
                                <td>{{$telefone->Descricao}}</td>  
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>

            
            <div class="row">
                <div class="col text-end">
                    <button href="" class="botao">Adicionar+</button>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    @if(session('success-atualizar-telefone'))
                        <div class="alert alert-success" >
                            {{ session('success-atualizar-RepresentanteLegal') }}
                        </div>
                    @endif
                    @if(session('success-cadastrar-telefone'))
                        <div class="alert alert-success" >
                            {{ session('success-atualizar-RepresentanteLegal') }}
                        </div>
                    @endif
                    @if(session('success-excluir-telefone'))
                        <div class="alert alert-success" >
                            {{ session('success-atualizar-RepresentanteLegal') }}
                        </div>
                    @endif
                    @error('update-telefone')
                    <div class="alert alert-danger" >
                        {{ $message }}
                    </div>
                    @enderror

                    @error('delete-telefone')
                    <div class="alert alert-danger" >
                        {{ $message }}
                    </div>
                    @enderror

                    @error('create-telefone')
                    <div class="alert alert-danger" >
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>

        </div>
                
        <div class="container-sm tabela">
        <h2>Seus Endereços</h2>
            <div class="row lista">
                <div class="col listaEnderecos">
                    <ul>
                        @foreach ($usuario->Endereco_Ong as $endereco)
                        <li>{{$endereco->endereco}}</li>
                        @endforeach
                        
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col align-self-end text-end">
                    <button href="" class="botao">Adicionar+</button>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    @if(session('success-cadastrar-endereco'))
                        <div class="alert alert-success" >
                            {{ session('success-atualizar-RepresentanteLegal') }}
                        </div>
                    @endif
                    @if(session('success-atualizar-endereco'))
                        <div class="alert alert-success" >
                            {{ session('success-atualizar-RepresentanteLegal') }}
                        </div>
                    @endif
                    @if(session('success-excluir-endereco'))
                        <div class="alert alert-success" >
                            {{ session('success-atualizar-RepresentanteLegal') }}
                        </div>
                    @endif
                    @error('create-endereco')
                        <div class="alert alert-danger" >
                            {{ $message }}
                        </div>
                    @enderror

                    @error('update-endereco')
                        <div class="alert alert-danger" >
                            {{ $message }}
                        </div>
                    @enderror

                    @error('create-endereco')
                        <div class="alert alert-danger" >
                            {{ $message }}
                        </div>
                    @enderror

                </div>
            </div>
        </div>

        
   

    <h1>Atualizar senha:</h1>
        <div class="container-sm senha">
            <div class="row">
                <div class="col">
                <form action="{{route('atualizarSenhaOng')}}" method="post">
                    @csrf
                    <label for="" class="form-label">Senha:</label>
                    <input type="password" name="password" class="form-control @error('NomeOng') is-invalid @enderror">
                    @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <label for="" class="form-label">Nova Senha:</label>
                    <input type="password" name="CadastrarSenha" class="form-control @error('NomeOng') is-invalid @enderror">
                    @error('CadastrarSenha')
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

        <div class="container Pagamento">
            <h1>Dados de pagamento</h1>
            <h5>Atualiza os seus dados de pagamento</h5>
            <button class="btn btn-primary " type="button">Pagamento</button>
        </div>

        <div class="container desativar">
            <h1>Desativar conta</h1>
            <a href="{{route('confirmarEmailDesativacaoOng')}}"><button class="btn btn-primary" type="button">Excluir conta</button></a>
        </div>

@endsection