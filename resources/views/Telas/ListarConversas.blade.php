@extends('layout.layout')


@section('vite')
@vite([
    'resources/css/ListarConversas.css', 
    ])
@endsection



@section('conteudo')
<h1>Conversas</h1>

<div class="container pesquisa">
    <div class="row">
        <div class="col">
            <form class="d-flex container-sm" role="search" width="10%">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    
            </form>
        </div>
    </div>
</div>
    <div class="container contato">
            <div class="row">
            <div class="col-2">
                <div class="imagem">
                    <div class="foto">
                            <img src="{{Vite::asset('resources/img/CAF.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col">

            <h5> Casa Filadelfia</h5>
                    <p> Ola, boa tarde,como vai?</p>

                    <h6>Data: 11/10/2020</h6>
            </div>
    </div>
    </div>

<br><br><br>