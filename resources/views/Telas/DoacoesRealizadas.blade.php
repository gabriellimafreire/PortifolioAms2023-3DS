
@extends('layout.layout')


@section('vite')
@vite([
        'resources/css/DoacoesRealizadas.css', 
    ])
@endsection



@section('conteudo')
    

<h1>Doações realizadas</h1>


    <div class="container procurar text-center">
            <div class="row ">
                <div class="col pesquisa">
                    <div class="input">
                        <form class="d-flex pesquisar" role="search">
                                <input class="form-control me-2" type="search" placeholder="insira o nome de uma ong ou a descrição de uma doação..." aria-label="Search">
                        </form>
                    </div>
                </div>
                <div class="row">
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
                <th>Logo Ong</th>
                <th  scope="col">Nome</th>
                <th  scope="col">ID doação</th>
                <th  scope="col">Tipo</th>
                <th  scope="col">Descrição</th>
                <th  scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Doacoes as $Doacoes)
                
            <tr>
                <td><img src="{{Vite::asset('resources/img/CAF.png')}}" alt="" width="50px" height="50px"></td>
                <td scope="row">{{$Doacoes->ONG()->}}</td>
                <td>001</td>
                <td>Material</td>
                <td>3 agasalhos, 2 casacos, uma calça e um gorro</td>
                <td>05/08/2023</td>


            </tr>

            @endforeach

        </tbody>
    </table>


</div>
<br><br><br><br><br><br>
@endsection