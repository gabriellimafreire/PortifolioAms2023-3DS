<html>
<head>

    <meta lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desativar Conta | BY HOPE IN LIFE</title>

        @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'resources/css/Estilo.css', 
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootsrap/dist/js/bootstrap.bundle.js'
        ])


</head>

<body style="background:#64CCC9; position:relative; min-height: 100vh;">


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


<div style="padding-bottom: 6rem;">

<br><br>
<center class="Titulo01">Desativar Conta</center>
<br>
<div class="container">
    <div style="color: #275950; font-family: Inter;font-size: 40px; font-style: normal; font-weight: 700; line-height: normal; width: 100%;">Deseja desativar sua conta?</div>
        <br>
        <a href="#" class="btn btn mb-3 py-2 px-5" style="border-radius: 10px; background: #275950;"><div style="color: #FFF; font-family: Inter; font-size: 30px; font-style: normal; font-weight: 800; line-height: normal;">Desativar Conta</div></a><br>
        <a href="#" class="btn btn mb-3 py-2 px-5" style="border-radius: 10px; background: #275950;"><div style="color: #FFF; font-family: Inter; font-size: 30px; font-style: normal; font-weight: 800; line-height: normal;">Voltar</div></a>
    </div>
</div>
</body><br>


            <!--Rodapé-->
            <footer class="main-footer">
    <a class="QS" href="{{Route('Informacoes')}}">Quem somos?</a>
    <a class="Info" href="{{Route('Informacoes')}}">Informações</a>
    <a href=""><img src="{{Vite::asset('resources/img/instagram.png')}}" class="img1-footer"></a>
    <a href=""><img src="{{Vite::asset('resources/img/linkedin.png')}}" class="img2-footer"></a>
   </footer>
        <!--fim do Rodapé-->

</html>