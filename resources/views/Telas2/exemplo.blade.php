<html>
<head>

    <meta lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INDEX DOADOR | BY HOPE IN LIFE</title>

        @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'resources/css/Estilo.css', 
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootsrap/dist/js/bootstrap.bundle.js'
        ])

       
        
</head>

<body style="background:#64CCC9">

<header><!--cabecalho-->
        <nav class="navbar navbar-expand-lg" style="background:#41BFB3">
        
          <div class="container-fluid">
            <a href=""><img src="{{Vite::asset('resources/img/HL - Logotipo.png')}}" class="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" hidden>
                    <span class="navbar-toggler-icon"></span>
                    </button>
        
                    
                <div id="divBusca"><input class="form-control me-20" type="search" placeholder="Search" aria-label="Search"></div>  
                <ul class="nav nav-underline">
                    
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Doações</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">ListarONGs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled">Necessidades</a>
                    </li>
                  
               </ul>
         </div>
        </nav>
    </header>


<img src="{{Vite::asset('resources/img/hope in life.png')}}" class="img-fluid" alt="..."  width="100%" >
<br><br>
<center><h1 style="font-family: Italianno">Necessidades</h1></center><br><br><br>

<div class="container" style="background-color:#9BF2EA"><br><br>
<div class="container text-center">
  <div class="row">
    <div class="col">
        <div class="etiqueta">aasdsadas</div>
            <div class="card" style="width: 18rem;">
                <img src="{{Vite::asset('resources/img/Fraldas.png')}}" class="card-img-top" alt="..." height="220px">
            <div class="card-body">
                <h5 class="card-title">Fralda Geriátrica</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    </div>

    <div class="col">

        <div class="card" style="width: 18rem;">
                    <img src="{{Vite::asset('resources/img/RoupasInverno.png')}}" class="card-img-top" alt="..." height="220px">
                <div class="card-body">
                    <h5 class="card-title">Roupa para o Inverno</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
        </div>
    </div>

    <div class="col">

    <div class="card" style="width: 18rem;">
                <img src="{{Vite::asset('resources/img/Cesta.png')}}" class="card-img-top" alt="..." height="220px">
            <div class="card-body">
                <h5 class="card-title">Cesta de Alimentos</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
    </div>

    </div>
  </div>
</div><br><br>
</div><br><br><br><br>

<center><h1 style="font-family: Italianno">ONGs</h1></center><br><br><br><br>

<div class="container" style="background-color:#9BF2EA"><br><br>
<div class="container text-center">
  <div class="row">
    <div class="col">

            <div class="card" style="width: 18rem;">
                <img src="{{Vite::asset('resources/img/CAF.png')}}" class="card-img-top" alt="..." height="290px">
            <div class="card-body">
                <h5 class="card-title">Fralda Geriátrica</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    </div>

    <div class="col">

        <div class="card" style="width: 18rem;">
                    <img src="{{Vite::asset('resources/img/Refugio343.png')}}" class="card-img-top" alt="..." height="290px">
                    
                <div class="card-body">
                    <h5 class="card-title">Roupa para o Inverno</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
        </div>
    </div>

    <div class="col">

    <div class="card" style="width: 18rem; background-color: while;">
            <div style="background-color: #4C77CC; border-radius: 150px;">
                <img src="{{Vite::asset('resources/img/CasaRonaldMcDonald.png')}}" class="card-img-top" alt="..." height="290px" >
            </div>
                <div class="card-body" stule>
                <h5 class="card-title">Cesta de Alimentos</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
    </div>

    </div>
  </div>
</div>
</div>

</body><br><br>

<footer class="main-footer">
    <p class="QS">Quem somos?</p>
    <p class="Info">Informações</p>
    <a href=""><img src="{{Vite::asset('resources/img/instagram.png')}}" class="img1-footer"></a>
    <a href=""><img src="{{Vite::asset('resources/img/linkedin.png')}}" class="img2-footer"></a>
   </footer>

</html>