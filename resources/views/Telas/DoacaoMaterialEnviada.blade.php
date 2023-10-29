@extends('layout.layout')


@section('vite')
@vite([
    'resources/css/DoacaoMaterialEnviada.css', 
  ])
@endsection



@section('conteudo')
    <div class="Titulos">
        <h3>Roupas para o Inverno</h3>
        <h4>ID da doação #570</h4>
    </div>

    <div class="DadosDoacao container">
        <h4><p>Nome da ONG: </p> Casa de Assistencia Filadelfia</h4>
        <h4><p>Data da Doação: </p> 12/08/2023</h4>
    </div>


    <div class="DoacaoMaterial container">
        <h3>Descrição:</h3>
        <h4><p>Tipo de doação:<p>&nbsp Material</h4>
    </div>


    <div class="container Descricao">

            <div class="Campo">
                <h4>Descrição da doação:</h4>

                <textarea name="Descricao" id="" disabled> 3 agasalhos infantis usados, uma touca vermelhas, 4 blusas de frio e um casaco.</textarea>

            </div>
    </div>

        <div class="container titulo">
            <div class="row">
                <div class="col">
                    <h4>Fotos do material doado:</h4>
                </div>
            </div>
        </div>

    <div class="container imagens">
        <div class="row">
            <div class="col">
                <img src="{{Vite::asset('resources/img/RoupasInverno.png')}}" alt="" width="200px" height="200px">
                
            </div>
        </div>
    </div>
    <br>
    
 

    <div class="container Contato">
            <h4>Precisa contactar a ONG?</h4>

            <div class="row chat">

                <div class="col text-center">
                
                    <img src="{{Vite::asset('resources/img/chat.png')}}"  alt="">

                    <p>Chat</p>

                </div>

                <div class="col text-center">

                    <p>Número de telefone: (11)12345-1234</p>

                    <p>São Paulo, SP - Itaquera, Praça Itaquera</p>

                </div>

            </div>

    </div>
    <div class="cancelar">
    <a type="button" class="btn btn-primary Botao" href="{{Route('DesativarNecessidade')}}">Cancelar doação</a>
    </div>
@endsection