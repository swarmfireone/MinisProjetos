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
                    $tag = 'p-1 m-1';
                }
                $contador++;
                ?>

            <!-- Categoria cadastrada -->
            <div class="d-flex align-middle">

                <div class="{{ $tag }} bg-info fit-content rounded">
                    <small>•</small>
                    <!-- Nome da categoria -->
                    <small class="m-1"> {{ $categoria->categoria_nome }} </small>
                </div>

            </div>
            @endforeach

            </div>
        </div>


    @endif