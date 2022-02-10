@foreach ($listaDeNoticias as $noticia)
    <?php   // Tratamento do comprimento da descrição da notícia

        $noticia_descricao = $noticia->noticia_descricao;
        
        if (mb_strlen($noticia_descricao) >= 80) {
            $posicaoACortar = mb_strpos(mb_strtolower($noticia_descricao), ' ', 70);
            if ($posicaoACortar === false) {
                $noticia_descricao = 'acesse a notícia para saber mais informações.';
            } else {
                $noticia_descricao = mb_str_split($noticia_descricao, $posicaoACortar)[0];
                $noticia_descricao .= ' ...';
            }
        }
    ?>

    <!-- Notícia -->
    <div class="col mb-5">

        <div class="card h-100 capa-da-noticia capa-da-noticia-id-{{ $noticia->noticia_id }}">

            <div class="card-title p-3 noselect">
                <!-- Título -->
                <span id="tituloNoticia" class="font-weight-bold">
                    {{ $noticia->noticia_titulo }}
                </span>

                <!-- Última atualização feita na notícia -->
                <div class="text-ultima-atualizacao"> 
                        <small>
                            {{ $noticia->updated_at }}
                        </small>
                    </div>
            </div>

        
            <!-- Corpo da matéria -->
            <div class="card-body noselect">
                <div class="d-flex flex-column">
                    <!-- Descricao -->
                    <span class="text-descricao font-weight-light">

                        {{ $noticia_descricao }}
                        
                    </span>
                </div>
            </div>


            <!-- Acessar Matéria-->
            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent noselect">
                <div class="text-right">
                    <a class="btn btn-outline-dark mt-auto" href="/exibir-noticia?id={{ $noticia->noticia_id }}">
                        Acessar
                    </a>
                </div>
            </div>

        </div>
    </div>

@endforeach