@extends('corpoHTML')



@section('corpoDaPagina')



    <section>

        <form method="post" enctype="multipart/form-data" class="p-3 p-lg-0 mx-5 my-sm-3 mb-lg-4">
            @csrf

            <div class="form-group py-2">
                <label for="tituloDaNoticia" class="text-form">*Título da Notícia :</label>
                <input type="hidden" name="type" value="noticia">
                <input id="tituloDaNoticia" name="noticia_titulo" type="text" class="form-control" maxlength="40" placeholder="As enchentes na Bahia" required="">
                <small class="form-text text-muted">O limite são de 40 caracteres</small>
            </div>
        
            <div class="form-group py-1">

                <!-- Lista de seleção de categorias -->
                <label for="selecionarCategoria" class="text-form">*Selecione a Categoria :</label>
                <select name="categoria_id" id="selecionarCategoria" class="form-control input-categoria">

                @foreach ($listaDeCategorias as $categoria)
                    <option value="{{ $categoria->categoria_id }}">
                        {{ $categoria->categoria_nome }}
                    </option>
                @endforeach
                    
                </select>

            </div>
        
            
            <div class="form-group py-1">
                <label for="descricaoDaNoticia" class="text-form">*Descrição :</label>
                <textarea id="descricaoDaNoticia" name="noticia_descricao" class="form-control" maxlength="300" placeholder="As enchentes que ocorreram no dia 24/10/2021 na região Nordeste do país deixou inúmeros ..." required="" rows="2"></textarea>
            </div>


            <div class="form-group py-1">
                <label for="imagemUpload" class="text-form">
                    Selecione a capa da notícia :
                </label>
                <br>
                <input type="file" name="imagemNoticia" id="imagemUpload">
            </div>
            

            <button type="submit" class="btn btn-primary my-3">Criar</button>

        </form>

    </section>



@endsection