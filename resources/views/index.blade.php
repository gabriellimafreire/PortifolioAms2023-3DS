@extends('layout.layout')


@section('vite')
@vite([
    'resources/css/index.css',
    'node_modules/bootstrap-icons/font/bootstrap-icons.css',
    'node_modules/jquery/dist/jquery.js',
    'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
    'resources/js/slider.js'
    ])
@endsection



@section('conteudo')

    

    <script type="module">
        import {
            rolagem
        } from "{{Vite::asset('resources/js/slider.js')}}"

        $('.proximo-1').on('click', function() {
            rolagem($('.lista-1'), $('.lista-1 .col'), 1)
        })

        $('.anterior-1').on('click', function() {
            rolagem($('.lista-1'), $('.lista-1 .col'), 0)
        })

        $('.proximo-2').on('click', function() {
            rolagem($('.lista-2'), $('.lista-2 .col'), 1)
        })

        $('.anterior-2').on('click', function() {
            rolagem($('.lista-2'), $('.lista-2 .col'), 0)
        })
    </script>

    <style>
        /* modal */

        .modal-body {
            text-align: center;
        }

        .modal-body img {
            display: inline-block;
        }

        .modal-content {
            background-color: #64CCC9 !important;
        }
    </style>

   
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{Vite::asset('resources/img/hope in life.png')}}" class="img-fluid" alt="..." width="100%">
            </div>
            <div class="carousel-item">
                <img src="{{Vite::asset('resources/img/hope in life.png')}}" class="img-fluid" alt="..." width="100%">
            </div>
            <div class="carousel-item">
                <img src="{{Vite::asset('resources/img/hope in life.png')}}" class="img-fluid" alt="..." width="100%">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br><br>
    <center>
        <h1 style="font-family: Italianno">Necessidades</h1>
    </center><br><br><br>

    <div class="container-fluid necessidades" style="background-color:#9BF2EA; padding: 20px; border-radius: 5px;">

        <div class="row lista lista-1">
            @foreach ($Necessidades as $Necessidades)
            
            <div class="col">

                <div class="card">
                    <img src="{{Vite::asset('resources/img/Fraldas.png')}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$Necessidades->NomeNecessidade}}</h5>

                        <p class="card-text">{{$Necessidades->descricao}}</p>

                    </div>
                </div>

            </div>
            @endforeach

        </div>
        <div class="anterior anterior-1">
            <i class="bi bi-arrow-left-short" width="70px"></i>
        </div>

        <div class="proximo proximo-1">
            <i class="bi bi-arrow-right-short" width="70px"></i>
        </div>
    </div>



    <center>
        <h1 style="font-family: Italianno">ONGs</h1>
    </center><br><br><br><br>

    <div class="container-fluid necessidades" style="background-color:#9BF2EA; border-radius: 5px !important; padding: 20px;">
        <div class="row lista lista-2">
        
        @foreach($Ongs as $Ongs)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{Vite::asset('resources/img/CAF.png')}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$Ongs->Nome}}</h5>
                        <p class="card-text">{{$Ongs->SobreOng}}</p>
                    </div>
                </div>
            </div>
        @endforeach

        </div>

        <div class="anterior anterior-2">
            <i class="bi bi-arrow-left-short" width="70px"></i>
        </div>

        <div class="proximo proximo-2">
            <i class="bi bi-arrow-right-short" width="70px"></i>
        </div>

    </div>
    <br>
    <br>
    @endsection