<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Necessidade de Fraldas Geriatricas</title>

    @vite([
        'resources/css/app.css', 
        'resources/css/ListarConteudoNecessidade.css', 
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootsrap/dist/js/bootstrap.bundle.js'
        ])

</head>


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








<body style="background-image: url('{{Vite::asset('resources/img/Login.png')}}')!important;">
  
<br><br><br>
<div class="container text-center">
  <div class="row">
    <div class="col">
      <div class="fotoOng">
        <div class="fundoImg">
          <img src="{{Vite::asset('resources/img/CasaRonaldMcDonald.png')}}" class="img-fluid" width="100px" height="100px">
        </div>
      </div>
    </div>

    <div class="col TituloNecessidade">
      <div class="Titulo">
        <h5> Casa Ronald MacDonald ABC </h5>
        <h5 style="color: #9BF2EA!important;"> Fraldas Geriatricas </h5>
      </div>
    </div>
  </div>

  <div class="row Necessidade">
      <div class="col FotoNecessidade">
          <img src="{{Vite::asset('resources/img/Fraldas.png')}}" class="img-fluid">
        </div>
    
      <div class="col Descricao" >
        <div class="conteudoDescricao">
          <p class="TextoDescricao">
          A Casa Ronald McDonald ABC está ajudando no combate aos maltratos contra os idosos, buscando uma melhor qualidade de
          vida para os idosos da região do Itaquera.
          Necessita-se de 10 pacotes de fraldas geriátricas para doar a duas famílias de idosos.
          </p>
          <div class="Total">
          <p class="Meta">Meta da doação: </p>
          <p class="Quantidade"> &nbsp; 3/10</p>
          
          </div>
          <a type="button" class="btn btn-primary Botao" href="{{Route('RealizarDoacaoMaterial')}}">Doar</a>
        </div>
       
      </div>
  </div>
  
  
</div>
<br><br><br><br><br>
    <div class="Endereco">
      <h5><b>Endereço:</b> São Paulo, SP - Itaquera, Rua Andiratuba 020</h5>
    </div>

    <footer class="main-footer">
    <a class="QS" href="{{Route('Informacoes')}}">Quem somos?</a>
    <a class="Info" href="{{Route('Informacoes')}}">Informações</a>
    <a href=""><img src="{{Vite::asset('resources/img/instagram.png')}}" class="img1-footer"></a>
    <a href=""><img src="{{Vite::asset('resources/img/linkedin.png')}}" class="img2-footer"></a>
   </footer>
</body>

</html>