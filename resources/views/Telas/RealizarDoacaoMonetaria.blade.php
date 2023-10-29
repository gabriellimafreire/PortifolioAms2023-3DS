<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação monetária</title>
    @vite([
        'resources/css/app.css', 
        'resources/css/RealizarDoacaoMonetaria.css', 
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootsrap/dist/js/bootstrap.bundle.js'
        ])
</head>
<body>
<<<<<<< HEAD
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

=======
<header><!--cabecalho-->
        <nav class="navbar navbar-expand-lg" style="background:#41BFB3">
        
          <div class="container-fluid">
            <a href=""><img src="{{Vite::asset('resources/img/HL - Logotipo.png')}}" class="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" hidden>
                    <span class="navbar-toggler-icon"></span>
                    </button>
        
                    
                <div id="divBusca"><input class="form-control me-20" type="search" placeholder="Search" aria-label="Search"></div>  
                <ul class="nav nav-underline">
                    
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{Route('home')}}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{Route('DoacoesRealizadas')}}">Doações</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{Route('ListarONGs')}}">ListarONGs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{Route('ListarNecessidades')}}">Necessidades</a>
                    </li>
                  
               </ul>
         </div>
        </nav>
    </header>
>>>>>>> 2103cc1 (telas linkadas)
    <h1>Pagina de doação</h1>

    <h2>Fraldas Geriatricas</h2>

    <div class="container MeiosPagamento">
      <h4>Doação monetária:</h4>

      <div class="container Opcoes">
<<<<<<< HEAD
          <img src="{{Vite::asset('resources/img/caixa130.png')}}" alt=""  class="Imagem">
          <img src="{{Vite::asset('resources/img/bradesco104.png')}}"  class="Imagem">
          <img src="{{Vite::asset('resources/img/pagseguro157.png')}}"   class="">
          <img src="{{Vite::asset('resources/img/pix 130.png')}}" alt="" class="Imagem">
=======
          <a href="{{Route('MeioDePagamento')}}"><img src="{{Vite::asset('resources/img/caixa130.png')}}" alt=""  class="Imagem"></a>
          <a href="{{Route('MeioDePagamento')}}"><img src="{{Vite::asset('resources/img/bradesco104.png')}}"  class="Imagem"></a>
          <a href="{{Route('MeioDePagamento')}}"><img src="{{Vite::asset('resources/img/pagseguro157.png')}}"   class=""></a>
          <a href="{{Route('MeioDePagamento')}}"><img src="{{Vite::asset('resources/img/pix 130.png')}}" alt="" class="Imagem"></a>
>>>>>>> 2103cc1 (telas linkadas)
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

                    <p>São Paulo, SP - Itaquera, Praça Itaquera</p>

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