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

        <style>
            .capa-da-noticia-id-9 {background-image: url('storage/imagens/capasNoticias/1kJv50mnzbddIwK3Kmmxb4rsdkePhRlgxX1PM1KD.jpg');}
            .capa-da-noticia-id-8 {background-image: url('storage/imagens/capasNoticias/2FRzq4vSgNtXGcyGBAkTY253cN1mQs4g0M6cDwmi.jpg');}
            .capa-da-noticia-id-7 {background-image: url('storage/imagens/capasNoticias/AAq6wSpBAnhkAlEiiuLvrBVfiTEPPl7zNY24D63x.jpg');}
            .capa-da-noticia-id-6 {background-image: url('storage/imagens/capasNoticias/Jcp5htDDxGdzMKylRMLD4hL2gD4SEP2SL8AfoQbX.webp');}
            .capa-da-noticia-id-5 {background-image: url('storage/imagens/capasNoticias/3vOZDgTB773JaN0Kzsp7Qu6ciHTvR2mApVMJiKYb.avif');}
            .capa-da-noticia-id-1 {background-image: url('storage/imagens/capasNoticias/DgTY4bvuH6YrM7Wo6mqr40zejszZDn9SxlSpOEqa.webp');}
            .capa-da-noticia-id-4 {background-image: url('storage/imagens/capasNoticias/s5gnG9O4qvELzzR4OeFOEeUntWNCcjpYukgWh4LV.jpg');}
            .capa-da-noticia-id-3 {background-image: url('storage/imagens/capasNoticias/AWSbe269Q2o9jQUbuGzqMDo48enklvFm7f1QiDrC.jpg');}
        </style>
    </head>



    <body style="overflow-y: hidden;">
            
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
                <i class="fas fa-bars" aria-hidden="true"></i>
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
                    <input type="hidden" name="_token" value="Dvx2yRHhBy9Ro62jGzdFWx5F0hJKIU1L41KpbxC3">                    <input class="form-control mr-sm-2" type="search" name="pesquisaQuery" size="15" placeholder="Nome da notícia" aria-label="Search" required="">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>

        </nav>



            


        <section class="py-1 py-sm-2 py-md-3 py-xl-2">
            

                    


            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    <!-- Notícias cadastradas -->
                    <!-- Notícia -->
                    <div class="col mb-5">

                        <div class="card h-100 capa-da-noticia capa-da-noticia-id-9" style="background-position-y: 44%; background-position-x: 120%; background-size: 101%;">

                            <div class="card-title p-3 noselect">
                                <!-- Título -->
                                <span id="tituloNoticia" class="font-weight-bold">
                                    Scientists worldwide are watching UK
                                </span>

                                <!-- Última atualização feita na notícia -->
                                <div class="text-ultima-atualizacao"> 
                                        <small>
                                            2022-02-11 04:31:27
                                        </small>
                                    </div>
                            </div>

                        
                            <!-- Corpo da matéria -->
                            <div class="card-body noselect">
                                <div class="d-flex flex-column">
                                    <!-- Descricao -->
                                    <span class="text-descricao font-weight-light">

                                        The country’s relaxation of measures such as masking — especially in England ...
                                        
                                    </span>
                                </div>
                            </div>


                            <!-- Acessar Matéria-->
                            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent noselect">
                                <div class="text-right">
                                    <a class="btn btn-outline-dark mt-auto" href="/exibir-noticia?id=9">
                                        Acessar
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

        
                    <!-- Notícia -->
                    <div class="col mb-5">

                        <div class="card h-100 capa-da-noticia capa-da-noticia-id-8" style="background-position-x: 47%; background-position-y: 0%; background-size: 262%;">

                            <div class="card-title p-3 noselect">
                                <!-- Título -->
                                <span id="tituloNoticia" class="font-weight-bold">
                                    Australia's next full-time men's coach
                                </span>

                                <!-- Última atualização feita na notícia -->
                                <div class="text-ultima-atualizacao"> 
                                        <small>
                                            2022-02-11 04:28:31
                                        </small>
                                    </div>
                            </div>

                        
                            <!-- Corpo da matéria -->
                            <div class="card-body noselect">
                                <div class="d-flex flex-column">
                                    <!-- Descricao -->
                                    <span class="text-descricao font-weight-light">

                                        Australia's limited overs captain Aaron Finch has backed interim coach ...
                                        
                                    </span>
                                </div>
                            </div>


                            <!-- Acessar Matéria-->
                            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent noselect">
                                <div class="text-right">
                                    <a class="btn btn-outline-dark mt-auto" href="/exibir-noticia?id=8">
                                        Acessar
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

        
                    <!-- Notícia -->
                    <div class="col mb-5">

                        <div class="card h-100 capa-da-noticia capa-da-noticia-id-7" style="background-position-x: 18%; background-position-y: 60%;">

                            <div class="card-title p-3 noselect">
                                <!-- Título -->
                                <span id="tituloNoticia" class="font-weight-bold">
                                    Reif to step down as MIT president
                                </span>

                                <!-- Última atualização feita na notícia -->
                                <div class="text-ultima-atualizacao"> 
                                        <small>
                                            2022-02-11 04:25:51
                                        </small>
                                    </div>
                            </div>

                        
                            <!-- Corpo da matéria -->
                            <div class="card-body noselect">
                                <div class="d-flex flex-column">
                                    <!-- Descricao -->
                                    <span class="text-descricao font-weight-light">

                                        For a decade, Reif’s bold vision led the Institute to dynamic growth and ...
                                        
                                    </span>
                                </div>
                            </div>


                            <!-- Acessar Matéria-->
                            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent noselect">
                                <div class="text-right">
                                    <a class="btn btn-outline-dark mt-auto" href="/exibir-noticia?id=7">
                                        Acessar
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

        
                    <!-- Notícia -->
                    <div class="col mb-5">

                        <div class="card h-100 capa-da-noticia capa-da-noticia-id-6" style="background-size: 256%; background-position-x: 88%; background-position-y: 56%;">

                            <div class="card-title p-3 noselect">
                                <!-- Título -->
                                <span id="tituloNoticia" class="font-weight-bold">
                                    Canadians skate for medals
                                </span>

                                <!-- Última atualização feita na notícia -->
                                <div class="text-ultima-atualizacao"> 
                                        <small>
                                            2022-02-11 04:22:32
                                        </small>
                                    </div>
                            </div>

                        
                            <!-- Corpo da matéria -->
                            <div class="card-body noselect">
                                <div class="d-flex flex-column">
                                    <!-- Descricao -->
                                    <span class="text-descricao font-weight-light">

                                        acesse a notícia para saber mais informações.
                                        
                                    </span>
                                </div>
                            </div>


                            <!-- Acessar Matéria-->
                            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent noselect">
                                <div class="text-right">
                                    <a class="btn btn-outline-dark mt-auto" href="/exibir-noticia?id=6">
                                        Acessar
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

        
                    <!-- Notícia -->
                    <div class="col mb-5">

                        <div class="card h-100 capa-da-noticia capa-da-noticia-id-5" style="background-size: 219%; background-position-x: 68%; background-position-y: 50%;">

                            <div class="card-title p-3 noselect">
                                <!-- Título -->
                                <span id="tituloNoticia" class="font-weight-bold">
                                    Al-Hilal 0-1 Chelsea
                                </span>

                                <!-- Última atualização feita na notícia -->
                                <div class="text-ultima-atualizacao"> 
                                        <small>
                                            2022-02-11 04:20:10
                                        </small>
                                    </div>
                            </div>

                        
                            <!-- Corpo da matéria -->
                            <div class="card-body noselect">
                                <div class="d-flex flex-column">
                                    <!-- Descricao -->
                                    <span class="text-descricao font-weight-light">

                                        Chelsea navigated what turned into a tricky semi-final in Abu Dhabi to ...
                                        
                                    </span>
                                </div>
                            </div>


                            <!-- Acessar Matéria-->
                            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent noselect">
                                <div class="text-right">
                                    <a class="btn btn-outline-dark mt-auto" href="/exibir-noticia?id=5">
                                        Acessar
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

        
                    <!-- Notícia -->
                    <div class="col mb-5">

                        <div class="card h-100 capa-da-noticia capa-da-noticia-id-1">

                            <div class="card-title p-3 noselect">
                                <!-- Título -->
                                <span id="tituloNoticia" class="font-weight-bold">
                                    COVID-19: What you need to know about
                                </span>

                                <!-- Última atualização feita na notícia -->
                                <div class="text-ultima-atualizacao"> 
                                        <small>
                                            2022-02-11 04:15:18
                                        </small>
                                    </div>
                            </div>

                        
                            <!-- Corpo da matéria -->
                            <div class="card-body noselect">
                                <div class="d-flex flex-column">
                                    <!-- Descricao -->
                                    <span class="text-descricao font-weight-light">

                                        Confirmed cases of COVID-19 have passed 403.3 million globally, according ...
                                        
                                    </span>
                                </div>
                            </div>


                            <!-- Acessar Matéria-->
                            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent noselect">
                                <div class="text-right">
                                    <a class="btn btn-outline-dark mt-auto" href="/exibir-noticia?id=1">
                                        Acessar
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

        
                    <!-- Notícia -->
                    <div class="col mb-5">

                        <div class="card h-100 capa-da-noticia capa-da-noticia-id-4" style="background-size: 259%; background-position-x: 10%; background-position-y: 46%;">

                            <div class="card-title p-3 noselect">
                                <!-- Título -->
                                <span id="tituloNoticia" class="font-weight-bold">
                                    Australia lists koala as endangered
                                </span>

                                <!-- Última atualização feita na notícia -->
                                <div class="text-ultima-atualizacao"> 
                                        <small>
                                            2022-02-11 04:14:28
                                        </small>
                                    </div>
                            </div>

                        
                            <!-- Corpo da matéria -->
                            <div class="card-body noselect">
                                <div class="d-flex flex-column">
                                    <!-- Descricao -->
                                    <span class="text-descricao font-weight-light">

                                        The Australian government has listed the koala as endangered in huge swaths ...
                                        
                                    </span>
                                </div>
                            </div>


                            <!-- Acessar Matéria-->
                            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent noselect">
                                <div class="text-right">
                                    <a class="btn btn-outline-dark mt-auto" href="/exibir-noticia?id=4">
                                        Acessar
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

        
                    <!-- Notícia -->
                    <div class="col mb-5">

                        <div class="card h-100 capa-da-noticia capa-da-noticia-id-3" style="background-size: 243%; background-position-x: 32%; background-position-y: 30%;">

                            <div class="card-title p-3 noselect">
                                <!-- Título -->
                                <span id="tituloNoticia" class="font-weight-bold">
                                    Biden warns Americans in Ukraine
                                </span>

                                <!-- Última atualização feita na notícia -->
                                <div class="text-ultima-atualizacao"> 
                                        <small>
                                            2022-02-11 04:10:57
                                        </small>
                                    </div>
                            </div>

                        
                            <!-- Corpo da matéria -->
                            <div class="card-body noselect">
                                <div class="d-flex flex-column">
                                    <!-- Descricao -->
                                    <span class="text-descricao font-weight-light">

                                        President Joe Biden sat down for a wide-ranging interview with NBC News, ...
                                        
                                    </span>
                                </div>
                            </div>


                            <!-- Acessar Matéria-->
                            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent noselect">
                                <div class="text-right">
                                    <a class="btn btn-outline-dark mt-auto" href="/exibir-noticia?id=3">
                                        Acessar
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </section>


        



        <footer class="footer-fixed">
            <div class="bg-custom-1 text-dark bg-info d-flex flex-column justify-content-center" style="width: 100%; position: absolute; top: 26px;">

                <div class="font-italic d-flex justify-content-center footer-copyright">
                    Mateus Lazarus
                </div>

            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <div id="forest-ext-shadow-host"></div>
    </body>
</html>