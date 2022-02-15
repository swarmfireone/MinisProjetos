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
                                <input id="imagemUpload" name="imagemNoticia" type="file" class="text-upload-imagem">
                            </form>

                            <button type="submit" class="btn btn-primary my-3 text-upload-imagem">Enviar Imagem</button>
                        </div>

                    @endif

                    
                    <div class="col-12 col-md-8 col-xl-6">

                        <div class="p-1 mb-4"> 
                            <input name="type" type="hidden" value="noticia">
                            <input name="ehAtualizacao" type="hidden"  value="1">
                            <input name="noticia_titulo" type="text" class="mb-2 mt-2 input-titulo form-control" maxlength="40" value="{{ $noticiaEspecifica->noticia_titulo }}">
                        </div>

                        <div class="ml-3">
                            <textarea name="noticia_descricao" class="mt-2 p-1 input-descricao form-control" maxlength="300" rows="7" value="Descrição da notícia mesmo">{{ $noticiaEspecifica->noticia_descricao }}</textarea>
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


                @if(!empty($noticiaEspecifica->noticia_pathCapa) )


                    <!-- Inserir Capa da Notícia -->
                    <div class="col-12 col-sm-10 col-md-8 col-xl-4 p-3 py-sm-2 py-md-3 p-lg-3 p-xl-2">
                            <form method="post" enctype="multipart/form-data">
                                @csrf

                                <label for="imagemUpload" class="text-form">
                                    Selecione a nova capa da notícia :
                                </label>
                                <br>
                                <input id="imagemUpload" name="imagemNoticia" type="file" class="text-upload-imagem">
                            </form>

                            <button type="submit" class="btn btn-primary my-3 text-upload-imagem">Atualizar Imagem</button>
                        </div>
                    </div>


                    <!-- Utilidades -->
                    <div class="col row justify-content-end justify-content-md-start justify-content-xl-around ml-md-0 ml-xl-0 my-3 my-xl-0">

                        <!-- Apenas espaçamento -->
                        <div></div>
                        
                        <!-- Atualização -->
                        <div class="mr-4 mr-md-4 mr-xl-4 my-md-3 md-lg-0" id="button-atualizacao">
                            <button type="submit" class="btn btn-primary my-3">Atualizar</button>
                        </div>

                        <!-- Exclusão -->
                        <div class="mr-4 mr-md-4 mr-xl-4 my-md-3 md-lg-0" id="button-atualizacao">
                            <a href="/exibir-noticia/excluir?id={{ $noticiaEspecifica->noticia_id }}" class="my-3 p-1 badge badge-danger">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </div>
                    </div>


                @else


                    <!-- Utilidades -->
                    <div class="col row justify-content-end justify-content-md-start justify-content-xl-around ml-md-3 ml-xl-0 my-xl-4">
                        
                        <!-- Atualização -->
                        <div class="mr-4 mr-md-4 mr-lg-5 mr-xl-4 my-md-3 md-lg-0" id="button-atualizacao">
                            <button type="submit" class="btn btn-primary my-3">Atualizar</button>
                        </div>

                        <!-- Exclusão -->
                        <div class="mr-4 mr-md-4 mr-lg-5 mr-xl-4 my-md-3 md-lg-0" id="button-atualizacao">
                            <a href="/exibir-noticia/excluir?id={{ $noticiaEspecifica->noticia_id }}" class="my-3 p-1 badge badge-danger">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </div>
                    </div>
                        

                @endif
                            

            </form>
        </div>
    </section>



@endsection