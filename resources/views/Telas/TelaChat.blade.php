<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar conta doador</title>
    @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'resources/css/TelaChat.css', 
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
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
                      <a class="nav-link active" href="{{Route('ListarConversas')}}">Chat</a>
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



<div class="parteMensagem" style='background-image: url("{{Vite::asset("resources/img/Login.png")}}");'>
<div class="container-fluid">
    <div class="row">
        <div class="col">
                    <div class="row contato">
                        <div class="col parte">

                                <img src="{{Vite::asset('resources/img/seta.png')}}" alt="" width="40px" height="40px">
                                <img src="{{Vite::asset('resources/img/CAF.png')}}" alt="" width="50px" height="50px" class="fotoPerfil">
                                <h6> Casa filadelfia </h6>
                        </div>
                        <div class="col opcoes">
                        <img src="{{Vite::asset('resources/img/3 bolinhas.png')}}" alt="" width="10px" height="40px">
                        </div>

                </div>

        </div>
    </div>
</div>
<div class="telaMensagem" >

<div class="Recebida">
    <div class="mensagem">
        <h6>Casa Filadélfia</h6>
        <p>Quando seria entregue a doação? E de que forma você deseja entregar?</p>
    </div>
</div>

<div class="Enviada">
    <div class="mensagem">
        <h6>Guilherme</h6>
        <p>Quando seria entregue a doação? E de que forma você deseja entregar?</p>
    </div>
</div>

<div class="Recebida">
    <div class="mensagem">
        <h6>Casa Filadélfia</h6>
        <p>Certo. Agradecemos pela sua doação, desejamos que você tenha um ótimo dia!</p>
    </div>
</div>


<div class="Enviada">
    <div class="mensagem">
        <h6>Guilherme</h6>
        <p>Quando seria entregue a doação? E de que forma você deseja entregar?</p>
    </div>
</div>

<div class="Recebida">
    <div class="mensagem">
        <h6>Casa Filadélfia</h6>
        <p>Quando seria entregue a doação? E de que forma você deseja entregar?</p>
    </div>
</div>
</div>
<div class="campoMensagem ">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                
            </div>
            <div class="col-1 img" style="padding-top: 5px; padding-bottom: 5px;">
                <img src="{{Vite::asset('resources/img/backup.png')}}" alt="" width="30px" height="30px">
                <img src="{{Vite::asset('resources/img/send.png')}}" alt="" width="30px" height="30px">
            </div>
        </div>
    </div>
</div>
</div>

    
</body>
</html>