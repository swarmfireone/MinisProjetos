    <!-- Título do div -->
    <span class="text-form">Categorias cadastradas</span>
    
    
    @if ($listaDeCategorias->isEmpty() )

        
        <div class="text-uppercase">
            <div class="d-flex align-middle">
                <small>
                    Não há nenhuma categoria cadastrada ainda.
                </small>
            </div>
        </div>


    @else


        <!-- Lista de categorias cadastradas -->
        <div class="text-uppercase">

            <?php
                // Quero que apenas a primeira categoria possua a classe "mt-3"
                $contador = 0;
            ?>

            @foreach ($listaDeCategorias as $categoria)

                <?php
                    if ($contador === 0) {
                        $tag = 'p-1 m-1 mt-3';
                    } else {
                        $tag = 'p-1 m-1 mt-3';
                    }
                    $contador++;
                ?>

            <!-- Categoria cadastrada -->
            <div class="d-flex align-middle align-baseline">

                <div class="{{ $tag }} bg-info fit-content rounded">
                    <small>•</small>
                    <!-- Nome da categoria -->
                    <small class="m-1" id="nome-categoria-id-{{ $categoria->categoria_id }}"> {{ $categoria->categoria_nome }} </small>
                </div>

                <!-- Utilidades -->

                    <!-- Edição -->

                    <div class="input-group edicao-categoria">
                        <input hidden class="form-control m-1 mt-3 p-1" id="edicao-categoria-id-{{ $categoria->categoria_id }}" type="text" value="{{ $categoria->categoria_nome }}" maxlength="20">
                        <div class="input-group-append my-1 mt-3 mr-1">
                            <button class="btn btn-sm btn-primary rounded" onclick="editarSerie({{ $categoria->categoria_id }})">
                                <i class="fa-solid fa-pencil"></i>
                                <i hidden class="fas fa-check" aria-hidden="true"></i>
                            </button>
                            @csrf                  
                        </div>
                    </div>

                    <!-- Exclusão -->
                    <div class="m-1 mt-3 exclusao-categoria">
                        <a href="/criar-categoria/excluir?id={{ $categoria->categoria_id }}" class="p-1 badge badge-danger">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </div>



            </div>
            @endforeach


        </div>
    
        <script>
            function getElementByXpath(path) {
                return document.evaluate(path, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue;
            }
        </script>

        <script>
            function editarSerie(serieId) {
                const nomeCategoriaEl = document.getElementById(`nome-categoria-id-${serieId}`);
                const inputCategoriaEl = document.getElementById(`edicao-categoria-id-${serieId}`);
                const distanciaExclusao = getElementByXpath(`//*[@id="edicao-categoria-id-${serieId}"]/../div`);
                const simboloPencil = distanciaExclusao.firstElementChild.firstElementChild;
                const simboloCheck = distanciaExclusao.firstElementChild.lastElementChild;
                if (nomeCategoriaEl.hasAttribute('hidden')) {
                    nomeCategoriaEl.removeAttribute('hidden');
                    inputCategoriaEl.hidden = true;
                    simboloPencil.removeAttribute('hidden');
                    simboloCheck.hidden = true;
                    distanciaExclusao.setAttribute('class', 'input-group-append my-1 mt-3 mr-1');
                } else {
                    inputCategoriaEl.removeAttribute('hidden');
                    nomeCategoriaEl.hidden = true;
                    simboloCheck.removeAttribute('hidden');
                    simboloPencil.hidden = true;
                    distanciaExclusao.setAttribute('class', 'input-group-append my-1 mt-3 mr-5');
                }
            }
        </script>


    @endif