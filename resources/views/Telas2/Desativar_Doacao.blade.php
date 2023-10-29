<html>
<head>

    <meta lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cancelar Doação | BY HOPE IN LIFE</title>

        @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'resources/css/Estilo.css', 
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootsrap/dist/js/bootstrap.bundle.js'
        ])

        

</head>

<body style="background:#64CCC9">

            <!--cabecalho-->

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

                <!--Fim do Cabeçalho-->
<br><br>
<center class="Titulo01" style="font-size: 45px;">Cancelar Doação</center>
<br>
    <div class="container">
        <div style="color: #275950; font-family: Inter;font-size: 35px; font-style: normal; font-weight: 700; line-height: normal;">Deseja Cancelar a doação?</div><br>
        <div class="estilo02" style="text-align: left;">
        <a style="font-weight: 600;">ID da doação #402</a><br>
            <br>
            Nome da Necessidade: <a style="font-weight: 600;">Materiais Esportivos</a><br>
            ONG: <a style="font-weight: 600;">Casa DFF</a><br>
        </div>
            <br><br>
        <div class="d-flex container py-3 pr-3" style="border-radius: 10px; background: #41BFB3; border-style: solid; border-color: #9BF2EA; border-width: 1px; width:100%;">
            <div class="Titulo01" style="font-size: 25px; font-weight: 700">
                Aviso: Cancelamento de  Doações Monetárias devem ser negociados com a ONG, assim como a devolução de materias doados.
            </div>
        </div>
        <br><br><br>
        <div class="Titulo01" style="font-size: 25px;">
        Para Cancelar a doação, confirme sua senha.
        </div><br>

            <a href="#" class="btn btn my-2 py-0 px-5" style="border-radius: 10px; background: #275950;"><div style="color: #FFF; font-family: Inter; font-size: 30px; font-style: normal; font-weight: 800; line-height: normal;">Cancelar<br>Doação</div></a>
            <a href="#" class="btn btn my-2 mx-3 py-2 px-5" style="border-radius: 10px; background: #275950;"><div style="color: #FFF; font-family: Inter; font-size: 30px; font-style: normal; font-weight: 800; line-height: normal;">Voltar</div></a>
        
    </div>
<br><br>
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