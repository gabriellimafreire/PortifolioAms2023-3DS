<html>

<head>

    <meta lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORMULÁRIO DE CADASTRO DO DOADOR | BY HOPE IN LIFE</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'node_modules/bootstrap/dist/css/bootstrap.min.css', 'node_modules/bootsrap/dist/js/bootstrap.bundle.js'])
</head>

<body style="background:#64CCC9">

    <header><!--cabecalho-->
        <nav class="navbar navbar-expand-lg" style="background:#41BFB3"><!--navegacao-->
            <div class="container-fluid">
    <a class="navbar-brand" href="#">Hope in Life</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" hidden>
            <span class="navbar-toggler-icon"></span>
       </button>


  <div id="divBusca"><input class="form-control me-20" type="search" placeholder="Search"                aria-label="Search"></div>
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
        </nav><!--navegacao-->
        <header><br><!--cabecalho-->

            <div class="container" style="background-color:#9BF2EA"><br><!-- formulario -->
                <form>
                 <ul>
              <li>Dados Pessoais</li><br>
          <li>Meios de Contatos</li><br>
               <li>Sobre Doação</li><br>
                    </ul>

                    <fieldset><!--dadospessoais--->
                 <h2>Dados Pessoais</h2>
                <input type="text" class="form-control" id="nomedoador" placeholder="Nome:"><br>
             <input type="text" class="form-control" id="sobrenomedoador" placeholder="SobreNome:"><br>
        <input type="text" class="form-control" id="sobrenomedoador" placeholder="Data de Nascimento:"><br>
              <input type="text" class="form-control" id="sobrenomedoador" placeholder="CPF:"><br>
       <button type="submit" class="btn btn-success" class="next acao">Próximo</button>
         </fieldset><!--dadospessoais--->
                    <fieldset><!--meiosdecontatos--->
             <h2>Meios de Contatos</h2>
          <input type="text" class="form-control" id="nomedoador" placeholder="Email:"><br>
     <input type="text" class="form-control" id="sobrenomedoador" placeholder="Senha:"><br>
             <input type="text" class="form-control" id="sobrenomedoador" placeholder="Telefone:"><br>
                        <button type="submit" class="btn btn-success" class="prev acao">Anterior</button>
        <button type="submit" class="btn btn-success" class="next acao">Próximo</button>
                    </fieldset><!--meiosdecontatos--->

                    <fieldset><!--sobredoacao--->
                        <h2>Sobre Doação</h2>
         <input type="text" class="form-control" id="nomedoador" placeholder="Seguimento de  que apoia:"><br>
         <input type="text" class="form-control" id="sobrenomedoador"placeholder="Cartão/Cartões que deseja cadstrar para doaçõa:"><br>
     <button type="submit" class="btn btn-success">Anterior</button>
 <button type="submit" class="btn btn-success" class="prev acao">Próximo</button>
          </fieldset><br><!--sobredoacao--->

                </form>
            </div><!-- formulario -->

                <!--fim do Rodapé-->
</body><br><br>

</body><br><br>

<footer style="background:#41BFB3"><br><br><br>
<ul class="nav justify-content-end">
        <li class="nav-item">
    <a class="navbar-brand" aria-current="page" href="#">Quem Somos</a>&nbsp;&nbsp;&nbsp;
   </li>
       <li class="nav-item">
           <a class="navbar-brand" href="#">Informações</a>
     </li>
        <li class="nav-item">
                  <a class="nav-link" href="#"></a><!--adicionar icone do instagram-->
        </li>
        <li class="nav-item">
            <a class="nav-link active"></a><!--adicionar icone do linkedin-->
        </li>
    </ul>
</footer>

</html>
