<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificações</title>
    @vite([
        'resources/css/app.css', 
        'resources/css/Notificacoes.css', 
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

<div class="Notificacoes">
    <h5>Notificações: &nbsp</h5><div class="NumeroFundo"><h5 class="Numero"> 3</h5></div>
</div>
<div class="pesquisa">
<form class="d-flex container-sm" role="search" width="10%">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        
</form>
</div>
<div class="container Lista">
<ul>
    <li id="li" onclick="DiminuirDescricao('Texto1')">
        <div class="container">
            <div class="Foto">
                <img src="{{Vite::asset('resources/img/CAF.png')}}" alt="" class="img-thumbnail">
            </div>
            <div class="Descricao" >
                    
                <h6 class="TituloNecessidade">
                    Casa de Assistencia Filadelfia atualizou status da doção ID#403
                </h6>
                        <div class="Texto" id="Texto1">
                            <h6> 
                             ONG Casa de Assistencia Filadelfia atualizou o status da  doação ID#403 para 
                            <span class="CorTexto">Recebido</span>.<br> Doação da necessidade: 
                            <span class="CorTexto">Roupa para o Inverno.</span> 
                            </h6>
                        </div>

                            <h6 >Data: 22/07/2023</h6>
                    
            </div>
        </div>
    </li>
    <li id="li"  onclick="DiminuirDescricao('Texto2')">
        <div class="container">
            <div class="Foto">
                <img src="{{Vite::asset('resources/img/CAF.png')}}" alt="" class="img-thumbnail">
            </div>
                <div class="Descricao" >
                    
                            <h6 class="TituloNecessidade">
                                Casa de Assistencia Filadelfia atualizou status da doção ID#403
                            </h6>
                            <div class="Texto" id="Texto2">
                            <h6> 
                                ONG Casa de Assistencia Filadelfia atualizou o status da  doação ID#403 para 
                                <span class="CorTexto">Recebido</span>.<br> Doação da necessidade: <span class="CorTexto">
                                    Roupa para o Inverno.</span> 
                            </h6>
                            </div>
                            <h6 >Data: 22/07/2023</h6>
                            
                    
                </div>
        </div>
    </li>
    <li id="li" onclick="DiminuirDescricao('Texto3')">
        <div class="container">
            <div class="Foto">
                <img src="{{Vite::asset('resources/img/CAF.png')}}" alt="" class="img-thumbnail">
            </div>
                <div class="Descricao" >
                    
                            <h6 class="TituloNecessidade">
                                Casa de Assistencia Filadelfia atualizou status da doção ID#403
                            </h6>
                            <div class="Texto" id="Texto3">
                            <h6> 
                                ONG Casa de Assistencia Filadelfia atualizou o status da  doação ID#403 para 
                                <span class="CorTexto">Recebido</span>.<br> Doação da necessidade: <span class="CorTexto">
                                    Roupa para o Inverno.</span> 
                            </h6>
                            </div>
                            <h6 >Data: 22/07/2023</h6>
                    
                </div>
        </div>
    </li>
</ul>
</div>


<script>
    function DiminuirDescricao(IdItem){
                if(window.innerWidth <= 767){

                        if(document.getElementById(IdItem).style.display == "block"){

                            document.getElementById(IdItem).style.display = "none"
                            

                            return 0;

                        }

                        if(document.getElementById(IdItem).style.display != "block" ){

                            document.getElementById(IdItem).style.display = "block"

                            return 0;
                        }
                     
                }
            }


    
</script>

<footer class="main-footer">
    <p class="QS">Quem somos?</p>
    <p class="Info">Informações</p>
    <a href=""><img src="{{Vite::asset('resources/img/instagram.png')}}" class="img1-footer"></a>
    <a href=""><img src="{{Vite::asset('resources/img/linkedin.png')}}" class="img2-footer"></a>
   </footer>
</body>
</html>