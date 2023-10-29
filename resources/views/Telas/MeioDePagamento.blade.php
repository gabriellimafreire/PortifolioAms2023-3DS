<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meios de pagamento</title>
    @vite([
        'resources/css/app.css', 
        'resources/css/MeioDePagamento.css', 
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

    <div class="container Opcoes">
        <h2>Valor:</h2>
        <div class="valor">
            <label for="5">R$ 5</label>
            <input type="radio" name="valor" id="5" hidden>
        </div>
        <div class="valor">
            <label for="10">R$ 10</label>
            <input type="radio" name="valor" id="10" hidden>
        </div>
        <div class="valor">
            <label for="15">R$ 15</label>
            <input type="radio" name="valor" id="15" hidden>
        </div>
        <div class="valor">
            <label for="20">R$ 20</label>
            <input type="radio" name="valor" id="20" hidden>
        </div>
        <div class="valor">
            <label for="25">R$ 25</label>
            <input type="radio" name="valor" id="25" hidden>
        </div>
        <div class="valor">
            <input type="radio" class="form-check-input" name="" id="OutroValor">
            <input type="text" name="valor" id="Outrovalor">
        </div>
    </div>
    
    </div>
        <div class="container Pagamento">
           <div class="row">
           <div class="col escolher">
                <h3>Qual cartão utilizará para doação?</h3>
                <ul>
                    <li>Cartão Inter Gold</li>
                    <li>Cartão Neon Internacional</li>
                    <li>BMG Card Consignado</li>
                </ul>
            </div>
            <div class="col dadosCartao">
                <form action="" class="post">
                    <label for="">Nome do titular:</label>
                    <input type="" id="" class="form-control">
                    <label for="">Nome do cartão:</label>
                    <input type="" id="" class="form-control">
                    <label for="">Data de validade:</label>
                    <input type="date" id="" class="form-control">
                    <label for="">CVV:</label>
                    <input type="" id="" maxlength="3"class="form-control">
                    <div class="botao">
                        <button type="button" class="btn btn-primary">Confirmar</button>
                    </div>
                    
                </form>

            </div>
           </div>
        

        </div>
    

    </div>



<br><br><br>









<footer class="main-footer">
    <a class="QS" href="{{Route('Informacoes')}}">Quem somos?</a>
    <a class="Info" href="{{Route('Informacoes')}}">Informações</a>
    <a href=""><img src="{{Vite::asset('resources/img/instagram.png')}}" class="img1-footer"></a>
    <a href=""><img src="{{Vite::asset('resources/img/linkedin.png')}}" class="img2-footer"></a>
   </footer>
</body>








</html>