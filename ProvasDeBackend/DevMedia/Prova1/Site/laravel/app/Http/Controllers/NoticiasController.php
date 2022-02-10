<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Noticia;
use Illuminate\Http\Request;
use App\Http\Requests\NoticiaFormRequest;
use App\Http\Requests\CategoriaFormRequest;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;


class NoticiasController extends BaseController
{
    
    // ↓↓↓ FUNÇÕES PARA CARREGAR PÁGINAS ↓↓↓
    

        public function paginaTeste(Request $request)
        {
            return view(
                'untitled-2',
                [
                    'listaDeNoticias' => Noticia::all()
                ]
            );
        }


        public function index(Request $request)
        {
            $sessionMensagem = $request->session()->get('mensagem');

            return view(
                view: 'paginas.index',
                data: [
                    'sessionMensagem' => $sessionMensagem,
                    'listaDeNoticias' => Noticia::all()
                ]
            );
        }


        public function pageCreateCategoria(Request $request)
        {
            $sessionMensagem = $request->session()->get('mensagem');
            // var_dump($sessionMensagem);

            return view(
                view: 'paginas.criarCategoria',
                data: [
                    'listaDeCategorias' => Categoria::all(),
                    'sessionMensagem' => $sessionMensagem
                ]
            );
        }


        public function pageCreateNoticia(Request $request)
        {
            $sessionMensagem = $request->session()->get('mensagem');

            return view(
                view: 'paginas.criarNoticia',
                data: [
                    'listaDeCategorias' => Categoria::all(),
                    'sessionMensagem' => $sessionMensagem
                ]
            );
        }


    // ↑↑↑ FUNÇÕES PARA CARREGAR PÁGINAS ↑↑↑



    // ↓↓↓ ROTAS POST ↓↓↓



        // ↓↓↓ POST CRIAÇÃO ↓↓↓
        

            public function postTeste(Request $request)
            {
                if ($request->hasFile('imagemNoticia') ) {
                    // Caso realmente exista um arquivo...
                    $pathCapa = $request->file('imagemNoticia')->store('/public/imagens/capasNoticias');
                    $pathCapa = str_replace('public', 'storage', $pathCapa);
                }
            }


            public function createNoticia(NoticiaFormRequest $request)
            {
                // Verifica o tipo de dado que quer criar

                if ($request->get('type') === 'noticia' ) {
                    $noticia_titulo = $request->get('noticia_titulo');
                    $noticia_descricao = $request->get('noticia_descricao');
                    $noticia_categoria = $request->get('categoria_id');

                    // Corpo da noticia e dados
                    $noticia_nova = new Noticia();
                    $noticia_nova->noticia_titulo = $noticia_titulo;
                    $noticia_nova->noticia_descricao = $noticia_descricao;
                    $noticia_nova->updated_at = NOW();
                    $noticia_nova->created_at = NOW();
                    
                    // Verifica se existe uma imagem para a notícia
                    if ($request->hasFile('imagemNoticia') ) {
                        // Caso realmente exista um arquivo...
                        $pathCapa = $request->file('imagemNoticia')->store('/public/imagens/capasNoticias');
                        $pathCapa = str_replace('public', 'storage', $pathCapa);
                        $noticia_nova->noticia_pathCapa = $pathCapa;
                    }
                    
                    $noticia_nova->save();
                    
                    // Noticia deve NECESSARIAMENTE ser atrelada a uma categoria
                    // Existe a necessidade de se atrelar a notícia a uma categoria
                    // $categoria = Categoria::find($noticia_categoria);
                    // $categoria->noticias()->attach($noticia_nova->noticia_id);
                    $noticia_nova->categorias()->attach($noticia_categoria);
                    

                    // $request->session()->flash('mensagem', "A noticia  \" $noticia_titulo \"  foi criada com sucesso.");
                    return redirect('index');
                }

                else {
                    $request->session()->flash('mensagem', "Erro no formato.");
                    return redirect('index');
                }
            }


            public function createCategoria(CategoriaFormRequest $request)
            {
                // Verifica o tipo de dado que quer criar

                if ($request->get('type') === 'categoria' ) {

                    $categoria_nome = mb_strtoupper($request->get('categoria_nome'));


                    // Checando se a categoria já existe
                    if ( !DB::table('categorias')->where('categoria_nome', '=', $categoria_nome)->get()->isEmpty() )
                    {
                        // Se a categoria existe...
                        $request->session()->flash('mensagem', "A categoria  \" $categoria_nome \"  já está cadastrada.");
                        return redirect('criar-categoria');
                    }


                    Categoria::create(
                        [
                            'categoria_nome' => $categoria_nome,
                            'updated_at' => NOW(),
                            'created_at' => NOW()
                        ]
                    );

                    $request->session()->flash('mensagem', "A categoria  \" $categoria_nome \"  foi criada com sucesso.");
                    return redirect('criar-categoria');
                }

                else {
                    $request->session()->flash('mensagem', "Erro no formato.");
                    return redirect('index');
                }
            }

        
        // ↑↑↑ POST CRIAÇÃO ↑↑↑



        // ↓↓↓ POST ATUALIZAÇÃO ↓↓↓
        

            public function storeCategoria(Request $request)
            {
                // Atualiza informações. Altera nome, updated_at da categoria
        
                if ($request->get('type') === 'categoria' ) {
                    if ($request->get('ehAtualizacao') === true ) {
                        
                    }
                }
            }
        
        
            public function storeNoticia(Request $request)
            {
                // Atualiza informações. Altera título, descrição, exclui e adiciona categorias e guarda a última atualização feita na notícia
                if ($request->get('type') === 'noticia' ) {
                    if ($request->get('ehAtualizacao') === '1' ) {
                        $noticiaId = $request->get('id');
                        $noticia = Noticia::find($noticiaId);
        
                        $noticia->noticia_titulo = $request->get('noticia_titulo');
                        $noticia->noticia_descricao = $request->get('noticia_descricao');
                        $noticia->updated_at = NOW();
        
                        // Verifica se existe uma imagem para a notícia
                        if ($request->hasFile('imagemNoticia') ) {

                            // Caso já exista uma imagem cadastrada para essa notícia
                            if (!empty($noticia->noticia_pathCapa) ) {
                                unlink('C:\Users\Pichau\Desktop\Python\Area_de_Testes\Programas\Minis_Projetos\ProvasDeBackend\DevMedia\Prova1\Site\laravel\public' . $noticia->noticia_pathCapa);
                            }

                            // Caso realmente exista um arquivo...
                            $pathCapa = $request->file('imagemNoticia')->store('/public/imagens/capasNoticias');
                            $pathCapa = str_replace('public', 'storage', $pathCapa);
                            $noticia->noticia_pathCapa = $pathCapa;
                        }
        
                        $noticia->save();
        
                        $request->session()->flash('mensagem', 'A noticia  \" ' . $noticia->noticia_titulo . ' \"  foi atualizada com sucesso.');
                    }
        
                }
            }
        
        
            public function exibirNoticia(Request $request)
            {
                $id = $request->query('id');
                $query = DB::table('categorias-noticias')->where('noticia_identification', '=', $id)->get();
        
        
                // Checando se a query retornou algum valor
                if ($query->isEmpty() ) {
                    // Caso esteja vazia
                    $request->session()->flash('mensagem', "A noticia de ID  \" $id \"  não existe.");
                    return redirect('index');
                }
        
                
                [$categoria_id, $noticiaId] = [$query[0]->categoria_identification, $query[0]->noticia_identification ];
        
                $categoria = Categoria::find($categoria_id);
                $noticia = Noticia::find($noticiaId);
        
                return view(
                    view: 'paginas.exibirNoticia',
                    data: [
                        'noticiaEspecifica' => $noticia,
                        'categoriaEspecifica' => [$categoria]
                    ]
                );
            }


        // ↑↑↑ POST ATUALIZAÇÃO ↑↑↑



    // ↑↑↑ ROTAS POST ↑↑↑
}