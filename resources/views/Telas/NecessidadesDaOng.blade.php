@extends('layout.layout')


@section('vite')
@vite([
    'resources/css/NecessidadesDaOng.css', 
    ])

@endsection



@section('conteudo')
    <title>Necessidades da ONG</title>
    @vite([
        'resources/css/NecessidadesDaOng.css', 
        ])


<h1>Minhas necessidades</h1>


    <div class="container procurar text-center">
            <div class="row ">
                <div class="col pesquisa">
                    <div class="input">
                        <form class="d-flex pesquisar" role="search">
                                <input class="form-control me-2" type="search" placeholder="insira o nome de uma ong ou a descrição de uma doação..." aria-label="Search">
                        </form>
                    </div>
                </div>
                <div class="row ordena">
                <div class="col">
                    <div class="ordenar">
                        <label for="">Ordenar por:</label>
                        <select name="Ordem" id="">
                                    <option value="Nome">Nome</option>
                                    <option value="Data">Data</option>
                                    <option value="Id">Id</option>
                        </select>
                        <img src="{{Vite::asset('resources/img/Arrow 8 (1).png')}}" alt="" width="20px" height="20px">
                    </div>
                    
                </div>
                </div>
        </div>
    </div>


    <div class="container tabela">
    <table class="table">
        <thead>
            <tr>
                <th  scope="col">Nome</th>
                <th  scope="col">ID</th>
                <th >Meta</th>
                <th  scope="col">Categoria</th>
                <th  scope="col">Descrição</th>
                <th  scope="col">Data de criação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Necessidades as $Necessidades)
            <tr>
                <td scope="row">{{$Necessidades->NomeNecessidade}}</td>
                <td>{{$Necessidades->id}}</td>
                <td class="doacoes"><div>{{$Necessidades->quantidade}} / {{$Necessidades->meta}}</div> <div class="meta"><img src="{{Vite::asset('resources/img/Arrow 9.png')}}" alt="" width="30px" height="15px"></div></td>
                <td>{{$Necessidades->Categoria}}</td>
                <td>{{$Necessidades->descricao}}</td>
                <td></td>


            </tr>
            @endforeach
        </tbody>
    </table>
    

</div>
        <div class="container">
            <div class="row">
                <div class="col desativadas">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Necessidades desativadas
                        </label>
                    </div>
                </div>
                <div class="col-7 botoes">
                    <div class="botao">
                    <button>Atualizar</button>
                    </div>
                    <div class="botao">
                    <button>Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>

<br><br><br><br><br><br>


@endsection