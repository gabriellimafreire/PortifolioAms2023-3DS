<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite([
        'resources/css/app.css', 
        'resources/css/DoacaoMonetariaEnviada.css', 
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootsrap/dist/js/bootstrap.bundle.js'
        ])

</head>
<body>

<header><!--cabecalho-->   
<nav class="navbar navbar-expand-lg" style="background:#41BFB3">
        
        <div class="container-fluid">
          <a class="navbar-brand" href="{{Route('home')}}"><img src="{{Vite::asset('resources/img/HL - Logotipo - SEM LETREIRO.png')}}" class="logo"></a>
          
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" hidden>
                  <span class="navbar-toggler-icon"></span>
                  </button>
      
                  
              <div id="divBusca"><input class="form-control" type="search" placeholder="Pesquisar..." aria-label="Search"></div>  
              <ul class="nav nav-underline" id="">
              <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{Route('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{Route('DoacoesRealizadas')}}">Minhas doações</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="{{Route('ListarONGs')}}">As ONGs</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="{{Route('ListarNecessidades')}}">Necessidades</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="{{Route('ListarConversas')}}">Chat</a>
                  </li>
                  <li class="nav-item">
                    <div class="dropdown" >
                        <button class="btn btn-secondary" type="button" style="background-color: #41BFB3;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <a href=""><img src="{{Vite::asset('resources/img/setaparabaixo.ico')}}" class="setab"></a>
                            <a href=""><img src="{{Vite::asset('resources/img/usuario.ico')}}" class="users"></a>
                        </button>
                        <ul class="dropdown-menu" >
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><a class="dropdown-item" href="#">Dados de pagamento</a></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                        </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href=""><img src="{{Vite::asset('resources/img/notificacao.ico')}}" class="notification"></a>
                  </li>
             </ul>
       </div>
      </nav>
</header>

        <div class="Titulos">
            <h3>Roupas para o Inverno</h3>
            <h4>ID da doação #570</h4>
        </div>

        <div class="DadosDoacao container">
            <h4><p>Nome da Ong: </p>&nbsp Casa Filadélfia</h4>
            <h4><p>Data da Doação: </p> 12/08/2023</h4>
        </div>

        <div class="DoacaoMaterial container">
        <h3 style="color : #275950;">Descrição</h3>
        <h4><p style="color: #275950;">Tipo de doação:<p>&nbsp Monetária</h4>
        <h3><p style="color: #275950;">Valor:<p>&nbsp R$ 50,00</h3>
    </div>

    <div class=" container MeioPagamento">
        <h2>Meio de pagamento:</h2>
        <img src="{{Vite::asset('resources/img/pix.png')}}">
    </div>
    <div class="container DadosCartao">
        <h2>Cartão utilizado </h2>
        <h3>Cartão Neon Internacional</h3>
        <div class="row">
            <div class="col">
                    <label for="" class="form-label">Nome do titular:</label>
                    <input type="text" class="form-control" disabled value="Josias de Almeida">
                    <label for="" class="form-label">Nome do cartão:</label>
                    <input type="text" class="form-control" disabled value="Cartão Inter Gold">
            </div>
            <div class="col">
                        <label for="" class="form-label">Data de validade:</label>
                        <input type="text" class="form-control" disabled value="03/07/2024">
                        <label for="" class="form-label">CVV:</label>
                        <input type="text" class="form-control" disabled value="711">
            </div>
            
        </div>


    </div>

    <div class="container Contato">
            <h4>Precisa contactar a ONG?</h4>

            <div class="row chat">

                <div class="col text-center">
                
                    <img src="{{Vite::asset('resources/img/chat.png')}}"  alt="">

                    <p>Chat</p>

                </div>

                <div class="col text-center">

                    <p>Número de telefone: (11)12345-1234</p>

                </div>

            </div>
    </div>
    <footer class="main-footer">
    <a class="QS" href="{{Route('Informacoes')}}">Quem somos?</a>
    <a class="Info" href="{{Route('Informacoes')}}">Informações</a>
    <a href=""><img src="{{Vite::asset('resources/img/instagram.png')}}" class="img1-footer"></a>
    <a href=""><img src="{{Vite::asset('resources/img/linkedin.png')}}" class="img2-footer"></a>
   </footer>
</body>
</html>