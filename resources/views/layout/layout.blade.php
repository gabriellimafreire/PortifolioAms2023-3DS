<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela chat</title>
        @vite([
            'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/jquery/dist/jquery.js',
            'node_modules/bootstrap/dist/css/bootstrap.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'
        ])
            

        <script type="module">
            const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
            const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
        </script>
        
        @yield('vite')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,-25" />
</head>
<body>
    
@if(Auth::guard('Doador')->check())
<nav class="navbar navbar-expand-lg" style="background:#41BFB3">

        <div class="container-fluid">
          <a class="navbar-brand" href="{{Route('home')}}"><img src="{{Vite::asset('resources/img/HL - Logotipo - SEM LETREIRO.png')}}" class="logo"></a>

         

              <div class="collapse navbar-collapse" id="navbarNav">
             
              <div id="divBusca"><input class="form-control" type="search" placeholder="Pesquisar..." aria-label="Search"></div>

              <ul class="nav navbar-nav" id="navbarNav">

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
             </ul>

             
             
             </div>

             
            <div class="botoes">

             <div class="dropdown">
                <button class="btn btn-secondary" type="button" style="background-color: #41BFB3;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="true">
                    <a href=""><img src="{{Vite::asset('resources/img/setaparabaixo.ico')}}" class="setab"></a>
                    <a href=""><img src="{{Vite::asset('resources/img/usuario.ico')}}" class="users"></a>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{route('atualizarDoador')}}">Perfil</a></li><br>
                    <li><a class="dropdown-item" href="{{route('logout')}}">Sair</a></li>
                </ul>
              </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <a><img src="{{Vite::asset('resources/img/notificacao.ico')}}" class="notification"></a>
            </div>

            </div>

      </nav>
@endif

    
@if(Auth::guard('Ong')->check())
<nav class="navbar navbar-expand-lg" style="background:#41BFB3">

        <div class="container-fluid">
          <a class="navbar-brand" href="{{Route('home')}}"><img src="{{Vite::asset('resources/img/HL - Logotipo - SEM LETREIRO.png')}}" class="logo"></a>

         

              <div class="collapse navbar-collapse" id="navbarNav">
             
              <div id="divBusca"><input class="form-control" type="search" placeholder="Pesquisar..." aria-label="Search"></div>

              <ul class="nav navbar-nav" id="navbarNav">

                <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{Route('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{Route('DoacoesRealizadas')}}">Doações recebidas</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{Route('ListarNecessidades')}}">Minhas Necessidades</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="{{Route('ListarConversas')}}">Chat</a>
                  </li>                 
             </ul>

             
             
             </div>

             
            <div class="botoes">

             <div class="dropdown">
                <button class="btn btn-secondary" type="button" style="background-color: #41BFB3;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="true">
                    <a href=""><img src="{{Vite::asset('resources/img/setaparabaixo.ico')}}" class="setab"></a>
                    <a href=""><img src="{{Vite::asset('resources/img/usuario.ico')}}" class="users"></a>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="{{route('atualizarOngView')}}">Perfil</a></li><br>
                  <li><a class="dropdown-item" href="{{route('logout')}}">Sair</a></li>
                </ul>
              </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <button type="button" class="btn btn-lg btn-danger" id="notificacao" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-template="
                <div class='popover' role='tooltip'>
                    <div class='popover-arrow'></div>
                    <div class='popover-inner'>
                        @foreach(Auth::guard('Ong')->user()->notifications as $Notificacoes)
                        <ul>
                            <li>
                                <a href='{{$Notificacoes->data['url']}}'>{{$Notificacoes->data['Descricao']}}</a>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>

                    " data-bs-title="1">
                    <img src="{{Vite::asset('resources/img/notificacao.ico')}}" class="notification">
                </button>
            </div>

            </div>

      </nav>

      
@endif

@if(!Auth::guard('Doador')->check() && !Auth::guard('Ong')->check())
<nav class="navbar navbar-expand-lg" style="background:#41BFB3">

        <div class="container-fluid">
          <a class="navbar-brand" href="{{Route('home')}}"><img src="{{Vite::asset('resources/img/HL - Logotipo - SEM LETREIRO.png')}}" class="logo"></a>

         

              <div class="collapse navbar-collapse" id="navbarNav">
             
              <div id="divBusca"><input class="form-control" type="search" placeholder="Pesquisar..." aria-label="Search"></div>

              <ul class="nav navbar-nav" id="navbarNav">

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{Route('home')}}">Home</a>
                </li>

                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="{{Route('ListarONGs')}}">  Ongs</a>
                  </li>     
                  
                  <li class="nav-item">
                    <a class="nav-link" href="{{Route('ListarNecessidades')}}">  Necessidades</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{Route('cadastrarDoadorView')}}">Cadastre-se doador</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{Route('cadastrarOngView')}}">Cadastre sua ONG</a>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route('login')}}">Entrar</a>
                </li>

             </ul>

             
             
             </div>
             <div class="botoes">
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                   </button>
               </div>
   
               </div>

      </nav>

      
@endif

@yield('conteudo')




<br>
<footer class="main-footer">
    <a class="QS" href="{{Route('Informacoes')}}">Quem somos?</a>
    <a class="Info" href="{{Route('Informacoes')}}">Informações</a>
    <a href=""><img src="{{Vite::asset('resources/img/instagram.png')}}" class="img1-footer"></a>
    <a href=""><img src="{{Vite::asset('resources/img/linkedin.png')}}" class="img2-footer"></a>
   </footer>

</body>
</html>