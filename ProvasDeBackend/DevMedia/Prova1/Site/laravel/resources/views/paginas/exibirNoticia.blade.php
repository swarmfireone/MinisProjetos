@extends('corpoHTML')



@section('corpoDaPagina')


    <section>
        <div class="p-4 p-md-1 p-lg-3 p-xl-4 m-2 m-md-3 m-xl-3 rounded bg-light">
            <form method="post" enctype="multipart/form-data">
                @csrf

                <div class="row p-2">

                    @if(!empty($noticiaEspecifica->noticia_pathCapa) )
                        <!-- Capa da Notícia -->
                        <div class="col-12 col-sm-10 col-md-8 col-xl-4 p-3 py-sm-2 py-md-3 p-lg-3 p-xl-2">
                            <picture>
                                <img class="w-100 rounded" src="{{ asset($noticiaEspecifica->noticia_pathCapa) }}" alt="capa da Noticia">
                            </picture>
                        </div>

                    @else

                        <!-- Inserir Capa da Notícia -->
                        <div class="col-12 col-sm-10 col-md-8 col-xl-4 p-3 py-sm-2 py-md-3 p-lg-3 p-xl-2">
                            <form method="post" enctype="multipart/form-data">
                                @csrf

                                <label for="imagemUpload" class="text-form">
                                    Selecione a capa da notícia :
                                </label>
                                <br>
                                <input type="file" name="imagemNoticia" id="imagemUpload" class="text-upload-imagem">
                            </form>

                            <button type="submit" class="btn btn-primary my-3 text-upload-imagem">Enviar Imagem</button>
                        </div>

                    @endif

                    
                    <div class="col-12 col-md-8 col-xl-6">

                        <div class="p-1 mb-4"> 
                            <input type="hidden" name="type" value="noticia">
                            <input type="hidden" name="ehAtualizacao" value="1">
                            <input type="text" name="noticia_titulo" class="mb-2 mt-2 input-titulo form-control" value="{{ $noticiaEspecifica->noticia_titulo }}">
                        </div>

                        <div class="ml-3">
                            <textarea name="noticia_descricao" class="mt-2 p-1 input-descricao form-control" rows="7" value="Descrição da notícia mesmo">{{ $noticiaEspecifica->noticia_descricao }}</textarea>
                        </div>

                    </div>


                    <div class="col-12 col-md-4 col-xl-2 justify-content-end">

                        <div class="ml-2 w-100" style="word-break: break-word;">
                            <div class="mb-3">
                                <div class="p-1">
                                    <small class="font-weight-bold">Criação :</small>
                                    <br>
                                    <small class="font-italic">{{ $noticiaEspecifica->created_at }}</small>
                                </div>

                                <div class="p-1 mt-1">
                                    <small class="font-weight-bold">Última atualização :</small>
                                    <br>
                                    <small class="font-italic">{{ $noticiaEspecifica->updated_at }}</small>
                                </div>
                            </div>


                            @foreach ($categoriaEspecifica as $categoria)
                                <div class="p-1 mb-2 bg-info rounded">
                                    <small>•</small>
                                    <small class="m-1">{{ $categoria->categoria_nome }}</small>
                                </div>
                            @endforeach


                        </div>

                    </div>
                </div>


                <div class="d-flex justify-content-end">
                    <div class="col-12 col-md-11 col-lg-5 col-xl-3 mr-lg-5 mr-md-5 mr-xl-4">
                        <button type="submit" class="btn btn-primary my-3">Atualizar</button>
                    </div>
                </div>


            </form>
        </div>
    </section>



@endsection