<html>
<head>

    <meta lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"  href="CSS/estilodesativarnecessidade.css" />
    <link rel="stylesheet"  href="CSS/recuperarsenha.css" />
    @vite([
    'resources/css/app.css', 
    'resources/js/app.js',
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/bootstrap/dist/css/recuperarsenha.css',
    'node_modules/bootstrap/dist/css/estilodesativarnecessidade.css',
    'node_modules/bootsrap/dist/js/bootstrap.bundle.js'
    ])
    <title>RECUPERAÇÃO DE SENHA | BY HOPE IN LIFE</title>


    <header><!--cabecalho-->
        <nav class="navbar navbar-expand-lg" style="background:#41BFB3">
        
          <div class="container-fluid">
            <a href=""><img src="img/HL - Logotipo.png" class="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" hidden>
                    <span class="navbar-toggler-icon"></span>
                    </button>
        
                    
                <div id="divBusca"><input class="form-control me-20" type="search" placeholder="Search" aria-label="Search"></div>  
                <ul class="nav nav-underline">
                    
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{Route('home')}}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{Route('DoacoesRealizadas')}}">Doações</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{Route('ListarONGs')}}">ListarONGs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{Route('ListarNecessidades')}}">Necessidades</a>
                    </li>
                  
               </ul>
         </div>
        </nav>
        <header>


</head><br>

<body class="body"><br><br><br><br>

   <center> <div class="card" style="background-color:#9BF2EA;">

        <br><br><h2>Recupere sua senha!</h2><br>

        <p>Informe o email da cadastrado na conta para enviarmos um link</p>
        <p>para a alteração da sua senha.</p><br>

        <center><input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" style="width: 35rem;"></center>

        <br><div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button style="background-color: #275950;color: white;"class="btn" type="submit">Enviar</button>&nbsp;&nbsp;&nbsp;<br>
        </div><br>

    </div></center><br><br><br><br><br>
   <footer class="main-footer">
    <p class="QS">Quem somos?</p>
    <p class="Info">Informações</p>
    <a href=""><img src="{{Vite::asset('resources/img/instagram.png')}}" class="img1-footer"></a>
    <a href=""><img src="{{Vite::asset('resources/img/linkedin.png')}}" class="img2-footer"></a>
   </footer>
</body>

</html>