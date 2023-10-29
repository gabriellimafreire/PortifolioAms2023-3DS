<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doacoes recebidas</title>
    
    @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'resources/css/DoacoesRecebidas.css', 
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
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


<h1>Doações recebidas</h1>
<div class="container procurar text-center">
        
            
            <div class="row ">
                <div class="col pesquisa">
                    <div class="input">
                        <form class="d-flex pesquisar" role="search">
                                <input class="form-control me-2" type="search" placeholder="insira o nome de um doador ou a descrição de uma doação..." aria-label="Search">
                        </form>
                    </div>
                </div>
                <div class="row">
                <div class="col">
                    <div class="ordenar">
                        <label for="">Ordenar por:</label>
                        <select name="Ordem" id="">
                                    <option value="Nome">Nome</option>
                                    <option value="Data">Data</option>
                                    <option value="Id">Id</option>
                        </select>
                        <img src="{{Vite::asset('resources/img/Arrow 8 (1).png')}}" alt="" width="20px" height="20px">
                    </div>
                    
                </div>
                </div>
        </div>

        </div>

<div class="container tabela">
    <table class="table">
        <thead>
            <tr>
                <th  scope="col">Nome  do doador</th>
                <th  scope="col">ID doação</th>
                <th  scope="col">Tipo</th>
                <th  scope="col">Descrição</th>
                <th  scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">Guilherme</td>
                <td>001</td>
                <td>Material</td>
                <td>3 agasalhos, 2 casacos, uma calça e um gorro</td>
                <td>05/08/2023</td>


            </tr>
                <br>
            <tr>
                <td scope="row">Gabriel</td>
                <td>002</td>
                <td>Material</td>
                <td>2 casacos e uma camiseta</td>
                <td>20/04/2023</td>


            </tr>

        </tbody>
    </table>


</div>

<div class="container filtros">
            <div class="filtro">
            <label for="">Filtro:</label>
            <select name="Filtro" id="">
                <option value="">Tipo doação</option>
                <option value="">Ultimo mes</option>
                <option value=""></option>
            </select>
            </div>
            <div class="filtro">
            <label for="">Categoria:</label>
            <select name="Categoria" id="">
                <option value="">Roupa</option>
                <option value="">Alimento</option>
                <option value="">Material didatico</option>
                <option value="">Item de higiene</option>
            </select>
            </div>
            <div class="filtro">
            <label for="">Tipo:</label>
            <select name="" id="">
                <option value="">Material</option>
                <option value="">Monetaria</option>
            </select>
            </div>
</div>


            <!--Rodapé-->

<footer class="main-footer">
    <a class="QS" href="{{Route('Informacoes')}}">Quem somos?</a>
    <a class="Info" href="{{Route('Informacoes')}}">Informações</a>
    <a href=""><img src="{{Vite::asset('resources/img/instagram.png')}}" class="img1-footer"></a>
    <a href=""><img src="{{Vite::asset('resources/img/linkedin.png')}}" class="img2-footer"></a>
</footer>
        <!--fim do Rodapé-->
</body>
</html>