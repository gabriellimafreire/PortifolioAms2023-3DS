<html>
<head>

    <meta lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesquisar Necessidades| BY HOPE IN LIFE</title>

        @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'resources/css/Estilo.css', 
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootsrap/dist/js/bootstrap.bundle.js'
        ])

       

</head>

<body style="background: linear-gradient(#9BF2EA 00.00 0%, rgba(100, 204, 201, 100) 100%); position:relative; width: 100%;">

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

<br><br>
<div style="padding-bottom: 5rem;">


    <!--pesquisa--> 
    <div class="container" style="width: 80%; ">
    <div class="container">
  <div class="row m-0" style="vertical-align: middle;">
    <div class="col-3 px-0 text-center asd" style="vertical-align: middle;">
        <form>
        <button type="submit" class="btn" style="background: #99E89D; width: 100%; height: 100%;"><div style="color: #FFF; font-family: Inter; font-size: 25px; font-style: normal; font-weight: 800; line-height: normal;">Pesquisar</div></button>
    </div>
    <div class="col px-0">
        <input type="text" placeholder="insira o nome de uma organização ou uma palavra chave" class="form-control #FAF3F3 asd2 h-100" style="background-color: #9BF2EA; border-color:#26874E;">
        </form>
    </div>
  </div>
    </div>
    </div>
    <!--fim da pesquisa-->

    <br><br>

    <br><br>

    <!--Lista de Necessidades-->

    <div class="container-fluid">
    <div class="row row-cols-3 m-2">

        <div class="col-4 py-3">
        <div class="card h-100" style="background-color: #41BFB3; border-radius: 0px;">
        <div style="background-color: #26874E; margin-left: 70%; padding: 5px;"><center class="estilo01">Aberta</center></div>
            <center>
            <a href="#" class="Titulo03" style=" font-size: 28px; text-decoration: none;">Instituto de Soliedarieade</a><br>
            <a href="#" class="estilo02" style=" font-size: 22px; text-decoration: none;">Roupa para o Inverno</a><br>
            </center>
            <a href="#" class="card-body border-top border-black" style="text-decoration: none;">
                <p class="card-text estilo02" style=" font-size: 18px;">Estamos arrecadando agasalhos e roupas de frio em geral.
                Para mais informações, entre em contato com nossa ONG.</p>
            </a>
            
            <a href="#" class="card-footer bg-transparent border-0" style="text-decoration: none;">
            <div class="container-fluid" style="background-color: #64CCC9;">
                    <div class="row">
                        <div class="col" style="text-align: center;">
                        Doação Material
                        </div>
                    </div>
            </div>
                <br>
            <div class="estilo03" style=" font-size: 18px;">São Paulo, SP - Itaquera, Rua Barros Cassal </div>
            </a><!--fim do card-footer-->
            </div> <!--fim do card-->
        </div> <!--fim da col-->

        <div class="col-4 py-3">
        <div class="card h-100" style="background-color: #41BFB3; border-radius: 0px;">
        <div style="background-color: #26874E; margin-left: 70%; padding: 5px;"><center class="estilo01">Aberta</center></div>
            <center>
            <a href="#" class="Titulo03" style=" font-size: 28px; text-decoration: none;">Educalê</a><br>
            <a href="#" class="estilo02" style=" font-size: 22px; text-decoration: none;">Livros infantis</a><br>
            </center>
            <a href="#" class="card-body border-top border-black" style="text-decoration: none;">
                <p class="card-text estilo02" style=" font-size: 18px;">Arrecadação de livros infantis, principalmente livros educativos para crianças.</p>
            </a>
            
            <a href="#" class="card-footer bg-transparent border-0" style="text-decoration: none;">
            <div class="container-fluid" style="background-color: #64CCC9;">
                    <div class="row">
                        <div class="col" style="text-align: center;">
                        Doação Material
                        </div>
                    </div>
            </div>
                <br>
            <div class="estilo03" style=" font-size: 18px;">São Paulo, SP - Itaquera, Rua Andiratuba 020 </div>
            </a><!--fim do card-footer-->
            </div> <!--fim do card-->
        </div> <!--fim da col-->

        <div class="col-4 py-3">
        <div class="card h-100" style="background-color: #41BFB3; border-radius: 0px;">
        <div style="background-color: #CE1C30; margin-left: 70%; padding: 5px;"><center class="estilo01">Encerrada</center></div>
            <center>
            <a href="#" class="Titulo03" style=" font-size: 28px; text-decoration: none;">Ambigua</a><br>
            <a href="#" class="estilo02" style=" font-size: 22px; text-decoration: none;">Moveis</a><br>
            </center>
            <a href="#" class="card-body border-top border-black" style="text-decoration: none;">
                <p class="card-text estilo02" style=" font-size: 18px;">Estamos buscando moveis em bom estado para doar para vítimas de inundação na região de Itaquera. </p>
            </a>
            
            <a href="#" class="card-footer bg-transparent border-0" style="text-decoration: none;">
            <div class="container-fluid" style="background-color: #64CCC9;">
                    <div class="row">
                        <div class="col" style="text-align: center;">
                        Doação Material
                        </div>
                    </div>
            </div>
                <br>
            <div class="estilo03" style=" font-size: 18px;">São Paulo, SP - Itaquera, Rua Heitor 90 </div>
            </a><!--fim do card-footer-->
            </div> <!--fim do card-->
        </div> <!--fim da col-->

        <div class="col-4 py-3">
        <div class="card h-100" style="background-color: #41BFB3; border-radius: 0px;">
        <div style="background-color: #26874E; margin-left: 70%; padding: 5px;"><center class="estilo01">Aberta</center></div>
            <center>
            <a href="#" class="Titulo03" style=" font-size: 28px; text-decoration: none;">CAPE</a><br>
            <a href="#" class="estilo02" style=" font-size: 22px; text-decoration: none;">Arrecadação para materiais escolares</a><br>
            </center>
            <a href="#" class="card-body border-top border-black" style="text-decoration: none;">
                <p class="card-text estilo02" style=" font-size: 18px;">Necessitamos de doações para compra de materiais escolares, voltado principalmente para alunos do fundamental.</p>
            </a>
            
            <a href="#" class="card-footer bg-transparent border-0" style="text-decoration: none;">
            <div class="container-fluid" style="background-color: #64CCC9;">
                    <div class="row">
                        <div class="col" style="text-align: center;">
                        Doação Monetária
                        </div>
                    </div>
            </div>
                <br>
            <div class="estilo03" style=" font-size: 18px;">São Paulo, SP - Itaquera, Flores do Piauí 720 </div>
            </a><!--fim do card-footer-->
            </div> <!--fim do card-->
        </div> <!--fim da col-->

        <div class="col-4 py-3">
        <div class="card h-100" style="background-color: #41BFB3; border-radius: 0px;">
        <div style="background-color: #26874E; margin-left: 70%; padding: 5px;"><center class="estilo01">Aberta</center></div>
            <center>
            <a href="#" class="Titulo03" style=" font-size: 28px; text-decoration: none;">Casa DFF</a><br>
            <a href="#" class="estilo02" style=" font-size: 22px; text-decoration: none;">Materiais Esportivos</a><br>
            </center>
            <a href="#" class="card-body border-top border-black" style="text-decoration: none;">
                <p class="card-text estilo02" style=" font-size: 18px;">Pedimos por materias para pratica de esporte, para realizarmos atividades interativas e gratuitas para comunidades.</p>
            </a>
            
            <a href="#" class="card-footer bg-transparent border-0" style="text-decoration: none;">
            <div class="container-fluid" style="background-color: #64CCC9;">
                    <div class="row">
                        <div class="col" style="text-align: center;">
                        Doação Material
                        </div>
                    </div>
            </div>
                <br>
            <div class="estilo03" style=" font-size: 18px;">São Paulo, SP - Itaquera, Praça Itaquera </div>
            </a><!--fim do card-footer-->
            </div> <!--fim do card-->
        </div> <!--fim da col-->

        <div class="col-4 py-3">
        <div class="card h-100" style="background-color: #41BFB3; border-radius: 0px;">
        <div style="background-color: #26874E; margin-left: 70%; padding: 5px;"><center class="estilo01">Aberta</center></div>
            <center>
            <a href="#" class="Titulo03" style=" font-size: 28px; text-decoration: none;">Honor Leste</a><br>
            <a href="#" class="estilo02" style=" font-size: 22px; text-decoration: none;">Arrecadação para paletras de minorias</a><br>
            </center>
            <a href="#" class="card-body border-top border-black" style="text-decoration: none;">
                <p class="card-text estilo02" style=" font-size: 18px;">Aceitamos arrecadações para incentivo das palestras que abordam minorias em SP.</p>
            </a>
            
            <a href="#" class="card-footer bg-transparent border-0" style="text-decoration: none;">
            <div class="container-fluid" style="background-color: #64CCC9;">
                    <div class="row">
                        <div class="col" style="text-align: center;">
                        Doação Monetária
                        </div>
                    </div>
            </div>
                <br>
            <div class="estilo03" style=" font-size: 18px;">São Paulo, SP - Itaquera, Rua Vicente 354 </div>
            </a><!--fim do card-footer-->
            </div> <!--fim do card-->
        </div> <!--fim da col-->

        


    </div><!-- fim da row-->
    </div><!-- fim do container-->
    <!--fim da Lista de Necessidades-->
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