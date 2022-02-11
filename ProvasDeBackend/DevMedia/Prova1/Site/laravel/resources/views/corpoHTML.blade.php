<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Mateus' Times Post</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/af5cc2ff3a.js" crossorigin="anonymous"></script>

        <link href="css/style-header.css" rel="stylesheet" type="text/css">
        <link href="css/style-footer.css" rel="stylesheet" type="text/css">
        <link href="css/style-body.css" rel="stylesheet" type="text/css">

        @yield('styleAdicional')
    </head>



    <body>
        
        <nav class="bg-custom-1 navbar navbar-expand-lg text-uppercase" id="mainNav">

            <div id="navbar-logo px-2 mr-3">
                <a href="https://www.linkedin.com/in/mateus-lazarus/" class="navbar-brand font-italic">
                    <div>
                        <div id="mateus-lazarus-0"></div>
                        <div id="mateus-lazarus-1"></div>
                        <span id="mateus-lazarus-2">L</span>
                        <span id="mateus-lazarus-3">azarus</span>
                        <span id="mateus-lazarus-4">Backend</span>
                    </div>
                </a>
            </div>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="text-navbar nav-link py-3 px-0 px-lg-3 rounded" href="/index">Exibir Notícias</a>
                    </li>

                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="text-navbar nav-link py-3 px-0 px-lg-3 rounded" href="/criar-noticia">Cadastrar Notícia</a>
                    </li>

                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="text-navbar nav-link py-3 px-0 px-lg-3 rounded" href="/criar-categoria">Cadastrar Categoria</a>
                    </li>
                </ul>

                <form method="POST" class="text-search form-inline">
                    @csrf
                    <input class="form-control mr-sm-2" type="search" name="pesquisaQuery" size="15" placeholder="Nome da notícia" aria-label="Search" required>
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>

        </nav>



        @yield('corpoDaPagina')



        <footer class="footer-fixed">
            <div class="bg-custom-1 text-dark bg-info d-flex flex-column justify-content-center">
                <div class="font-italic d-flex justify-content-center footer-copyright">
                    Mateus Lazarus
                </div>

                <div class="d-flex justify-content-center">
                    <strong>30-01-2022 &copy;</strong>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>