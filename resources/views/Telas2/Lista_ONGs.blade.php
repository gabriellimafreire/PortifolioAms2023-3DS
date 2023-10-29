<html>
<head>

    <meta lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de ONGs| BY HOPE IN LIFE</title>

        @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'resources/css/Estilo.css', 
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootsrap/dist/js/bootstrap.bundle.js'
        ])

       

</head>

<body style="background: #64CCC9; position:relative; width: 100%;">

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
                      <a class="nav-link active" href="{{Route('ListarONGs')}}">As ONGs</a>
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


<div style="padding-bottom: 5rem;">

   
<br><br><br>

    <!--pesquisa--> 
    <div class="container">
  <div class="row" style="vertical-align: middle;">
    <div class="col-6 col-sm-4" style="vertical-align: middle;">

        <div style="color: #FFF; background: #99E89D; font-family: Inter; font-style: normal; font-weight: 800; line-height: normal; padding: 5px !important; text-align: center;"><h1>Pesquisar</h1></div>
    </div>
    <div class="col ">
        <input type="text" placeholder="insira o nome de uma organização ou uma palavra chave" class="form-control #FAF3F3 asd2 h-100" style="background-color: #D9D9D9; border-color:#26874E; border-radius: 15px; width: 100% !important; max-width: 100% !important;">
    </div>
  </div>
    </div>
    <!--fim da pesquisa-->

    <br><br>
        </div>
    <div class="container ong" >
        <div class="row row-cols-1 row-cols-sm-2 listaOng" style="background-color: rgba(155, 242, 234, 0.6); border-radius: 15px; border: 1px solid #BCB7B7;">
        
        <div class="col col-sm-4">
            <h1 class="Titulo01" style="font-size: 20px; font-weight: 700; text-align: center; padding-left: 10%; padding-right: 10%">Casa Filadélfia</h1>
            <img src="{{Vite::asset('resources/img/CAF.png')}}" alt="..." style="background-color: #FFF; border-radius: 190px;"><br>
        </div>

        <div class="col col-sm-8" >
            <br>
            <div class="estilo02" style="text-align: left; font-size: 22px; background: linear-gradient(180deg, #000 0%, rgba(0, 0, 0, 0.10) 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            A Casa Filadélfia – CAF nasceu através do trabalho humanitário de Dona Nadir Salles Uliano, em 1988,
             em 1995 foi organizada como pessoa jurídica, e em 2001 priorizando o atendimento de crianças e 
             adolescentes por reconhecer sua condição de maior vulnerabilidade no cenário do HIV/Aids.
            </div>
            <h3><br></h3>
            <div class="estilo02" style="text-align: left; font-size:22px;">
            <a style="font-weight: 700;">Endereço:</a> São Paulo, SP - Itaquera, Rua Barros Cassal<br>
            <a style="font-weight: 700;">Telefone:</a> (11)23465-9675
            </div> 
        </div>
        
        </div>

        <br><br><br>

        <div class="row row-cols-1 row-cols-sm-2 listaOng" style="background-color: rgba(155, 242, 234, 0.6); border-radius: 15px; border: 1px solid #BCB7B7;">
        
        <div class="col col-sm-4">
            <div class="Titulo01" style="font-size: 20px; font-weight: 700; text-align: center; padding-left: 10%; padding-right: 10%">Casa Ronald McDonald ABC</div><br>
            <img src="{{Vite::asset('resources/img/CasaRonaldMcDonald_Lista.png')}}" alt="..." class="imagemfit" style="background-color: #4C77CC; border-radius: 500px; margin-left: 8%;"><br><br>
        </div>

        <div class="col col-sm-8">
            <div class="estilo02" style="text-align: left; font-size: 22px; background: linear-gradient(180deg, #000 0%, rgba(0, 0, 0, 0.10) 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            A estrutura organizacional da Casa de Apoio a Crianças com Câncer do ABC – Casa Ronald McDonald ABC é formada por quatro órgãos (Assembleia Geral, Conselho Fiscal, Conselho Deliberativo e Diretoria), sendo que todos os integrantes são voluntários.

            O propósito da Casa Ronald McDonald ABC é ser uma “casa longe de casa”, oferecendo apoio integral às crianças e aos adolescentes acometidos pelo câncer e que realizam
            </div>
            <br>
            <div class="estilo02" style="text-align: left; font-size:22px;">
            <a style="font-weight: 700;">Endereço:</a> São Paulo, SP - Itaquera, Rua Andiratuba 020<br>
            <a style="font-weight: 700;">Telefone:</a> (11)21356-4589
            </div> 
        </div>
        
        </div>

<br><br><br>
        <div class="row row-cols-1 row-cols-sm-2 listaOng" style="background-color: rgba(155, 242, 234, 0.6); border-radius: 15px; border: 1px solid #BCB7B7;">
        <div class="col col-sm-4">
            <div class="Titulo01" style="font-size: 20px; font-weight: 700; text-align: center; padding-left: 10%; padding-right: 10%">Refúgio 343</div>
            <img src="{{Vite::asset('resources/img/Refugio343.png')}}" alt="..." style="background-color: #FFF; border-radius: 190px;">
        </div>
            <br>
        <div class="col col-sm-8" style="padding-right: 5%;">
            <div class="estilo02" style="text-align: left; font-size: 22px; background: linear-gradient(180deg, #000 0%, rgba(0, 0, 0, 0.10) 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            O Refúgio 343 nasceu em resposta ao que é hoje o maior desafio migratório da história do hemisfério ocidental. Somos uma organização humanitária dedicada à reinserção socioeconômica de refugiados e migrantes. Trabalhamos com os eixos de desenvolvimento social e ajuda humanitária através dos pilares de acolhimento e ed...
            </div>
            <br>
            <div class="estilo02" style="text-align: left; font-size:22px;">
            <a style="font-weight: 700;">Endereço:</a> São Paulo, SP - Itaquera, Flores do Piauí 720<br>
            <a style="font-weight: 700;">Telefone:</a> (11)33123-5374
            </div> 
        </div>
        
        </div>

    </div>

    <br><br>

    <!--Lista de Necessidades-->

    <div class="container-fluid">
    <div class="row row-cols-3 m-2">

     
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