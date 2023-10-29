

@extends('layout.layout')


@section('vite')
@vite([
    'resources/css/RealizarDoacaoMaterial.css', 
    ])
@endsection



@section('conteudo')

    <h2>Página de Doação</h2>

    <h2>Necessidade: Roupas para o Inverno</h2>

<div class="container Descricao">
    
    <h3>Doação Material:</h3>
    <form action="{{route("cadastrarDoacaoMaterial")}}" method="POST">
        @csrf
        <div class="Campo">
            <h4>Descrição da doação:</h4>
            <input type="text" name="id" value={{$id}} hidden>
            <textarea name="Descricao" id="">

    </textarea>
        </div>
</div>
            <div class="container titulo">
                <div class="row">
                    <div class="col">
                        <h4>Adicionar imagens da doação:</h4>
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
            
            <input type="file">

<div class="doar">
<button type="submit" class="btn btn-primary Botao">Concluir doação material</button>
</div>
</form>



                




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
    <script>
    var arquivos = new Array
    var imagem = 0
    var NovaImagem = new Array


        function AdicionarImagem(event){    
            for (let index = 0; index < event.target.files.length; index++) {
                arquivos.push(imagem, event.target.files[index])
                var Image = document.createElement("img")
                NovaImagem.push([imagem, Image])
                var reader = new FileReader();
            
                var url = reader.readAsDataURL(event.target.files[0])

                reader.onload = function(){

                NovaImagem[imagem][1].src = reader.result

                alert(reader.result)

                document.getElementById('Previsualizacao').appendChild(NovaImagem[imagem][1])
                imagem += 1
                
                
            }
           

            }
        }




        function removerImagem(){

        }
        
        
    </script>

@endsection