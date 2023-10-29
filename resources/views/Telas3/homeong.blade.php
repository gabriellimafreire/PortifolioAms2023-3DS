@extends('layout.layout')


@section('vite')
@vite([
        'resources/css/homeong.css', 
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap-icons/font/bootstrap-icons.css',
        'node_modules/jquery/dist/jquery.js',
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

</head>
<body class="body"><br>
    <h3 style="color: #275950;">Bem vindo!</h3><br>
    <h4 style="color: #275950;" class="title">Minhas necessidades</h4>

    <div class="container-fluid necessidades" style="background-color:#9BF2EA; padding: 20px; border-radius: 5px;">

        <div class="row lista lista-1">
            @foreach($Necessidades as $Necessidades)
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


    <h4 style="color: #275950;" class="title">Doações recebidas</h4>


    
    <div class="container-fluid necessidades" style="background-color:#9BF2EA; border-radius: 5px !important; padding: 20px;">
        <div class="row lista lista-2">
        

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{Vite::asset('resources/img/CAF.png')}}">
                    <div class="card-body">
                        <h5 class="card-title">ola</h5>
                        <p class="card-text">ola</p>
                    </div>
                </div>
            </div>


        </div>

        <div class="anterior anterior-2">
            <i class="bi bi-arrow-left-short" width="70px"></i>
        </div>

        <div class="proximo proximo-2">
            <i class="bi bi-arrow-right-short" width="70px"></i>
        </div>

    </div>










<br>

@endsection