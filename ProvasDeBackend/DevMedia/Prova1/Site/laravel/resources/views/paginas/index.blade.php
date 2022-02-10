@extends("corpoHTML")



@section("styleAdicional")



    <style>
        <?php 
            foreach ($listaDeNoticias as $noticia) {
                $nomeClasse = '.capa-da-noticia-id-';
                $nomeClasse .= "$noticia->noticia_id";

                $informacaoClasse = "{background-image: url('$noticia->noticia_pathCapa');}";

                $finalClasse = "$nomeClasse $informacaoClasse";

                echo $finalClasse . PHP_EOL;
            }
        ?>
    </style>



@endsection



@section("corpoDaPagina")



    <section class="py-1 py-sm-2 py-md-3 py-xl-5">
        <!-- Mensagem sobre ação realizada -->
        @if (!empty($sessionMensagem) )
            <div class="alert alert-success font-italic">
                <span>
                    {{ $sessionMensagem }}
                </span>
            </div>
        @endif
        

        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <!-- Notícias cadastradas -->
                @include('layouts.layoutNoticia')

            </div>
        </div>
    </section>


    
@endsection