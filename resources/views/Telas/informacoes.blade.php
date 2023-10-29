<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
    @vite([
        'resources/css/app.css', 
        'resources/css/informacoes.css', 
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootsrap/dist/js/bootstrap.bundle.js'
        ])


</head>

<body background-color="blue">
    
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


<div class="titulos container">

<h1> Informações do site</h1>
<div class="link">
<h2>Politica de dados </h2> 
<h2 class="ir"> > </h2>
</div>
<div class="link">
<h2>Regras para os dados bancários </h2>
<h2 class="ir"> > </h2>
</div>
<div class="link">
<h2>    Como usamos suas informações </h2>
<h2 class="ir"> > </h2>
</div>

</div>

<div class="titulos container">
    
<h1>Informações para as ONGs </h1>
<div class="link">

<h2>Dúvidas </h2>

<div class="ir">
<h2> > </h2>
</div>
</div>
<div class="link">
<h2>Regras </h2>
<h2 class="ir"> > </h2>
</div>
<div class="link">
<h2> Infrmações da sua conta </h2>
<h2 class="ir"> > </h2>
</div>

</div>

<div class="endereco container">
    <h1> Endereço: </h1>
    <h2>Rua endereco, numero teste, bairro teste, cidade teste, Pais Brasil </h2>
</div>

<div class="contato container">
    
    <h1>Informações de contato:</h1>
    <h2>Email:</h2>
    <h3> email@gmail.com </h3>
    <h2> Telefone: </h2>
    <h3>(55) 11 98756-4323</h3>
    <h3>(55) 11 98756-4323</h3>
</div>
<footer class="main-footer">
    <p class="QS">Quem somos?</p>
    <p class="Info">Informações</p>
    <a href=""><img src="{{Vite::asset('resources/img/instagram.png')}}" class="img1-footer"></a>
    <a href=""><img src="{{Vite::asset('resources/img/linkedin.png')}}" class="img2-footer"></a>
   </footer>
</body>
</html>