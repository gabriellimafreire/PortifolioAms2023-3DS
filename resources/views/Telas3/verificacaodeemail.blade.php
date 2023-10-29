<html>
<head>

    <meta lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"  href="CSS/verificacaodeemail.css" />

    @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'resources/css/verificacaodeemail.css', 
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootsrap/dist/js/bootstrap.bundle.js'
        ])

    <title>VERIFICAÇÃO DE EMAIL | BY HOPE IN LIFE</title>



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



</head><br>

<body class="body"><br><br>

   <center> <div class="card" style="background-color:#9BF2EA;">

        <h2 class="title">Email Verificado!</h2>
    
        <div class="imagem">
            <a href="" class="Foto"><img src="{{Vite::asset('resources/img/CAF.png')}}" class="logocaf"></a>
        </div>
       <h5>Seu email foi verificado, agora você pode utilizar</h5>
       <h5>nossos serviços de maneira completa.</h5>


    </div></center><br><br><br>
   <footer class="main-footer">
    <p class="QS">Quem somos?</p>
    <p class="Info">Informações</p>
    <a href=""><img src="{{Vite::asset('resources/img/instagram.png')}}" class="img1-footer"></a>
    <a href=""><img src="{{Vite::asset('resources/img/linkedin.png')}}" class="img2-footer"></a>
   </footer>
</body>

</html>