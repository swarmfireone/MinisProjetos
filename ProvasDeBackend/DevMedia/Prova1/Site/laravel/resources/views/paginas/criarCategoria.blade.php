@extends('corpoHTML')



@section('corpoDaPagina')



    <section>
        @if (!empty($sessionMensagem) )

            <div class="alert alert-success font-italic">
                <span>
                    {{ $sessionMensagem }}
                </span>
            </div>

        @endif

        
        <div class="m-1 d-flex flex-column flex-md-row">

            <form method="post" enctype="multipart/form-data" class="w-50 p-4 mx-5 my-sm-3 my-lg-4">
                @csrf

                <div class="form-group py-2">
                    <label for="categoriaNova" class="text-form">*Nome da Categoria :</label>
                    <input type="hidden" name="type" value="categoria">
                    <input id="categoriaNova" name="categoria_nome" type="text" class="form-control" maxlength="20" placeholder="Esportes" required="">

                    <small class="form-text text-muted">O limite são de 20 caracteres</small>
                </div>
                

                <button type="submit" class="btn btn-primary my-3">Criar</button>

            </form>


            <div class="w-50 m-4 pl-3 pb-4 pb-sm-3 pb-md-2 pb-lg-0 d-flex flex-column align-text-top">

                <!-- Categorias -->
                @include('layouts.listarCategorias')

            </div>
        </div>
        

    </section>



@endsection