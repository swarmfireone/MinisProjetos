<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ↓↓↓ ROTAS GET ↓↓↓



    Route::get(
        '/teste',
        [NoticiasController::class, 'paginaTeste']
    );


    Route::get(
        '/index',
        [NoticiasController::class, 'index']
    );


    Route::get(
        '/criar-categoria',
        [NoticiasController::class, 'pageCreateCategoria']
    );


    Route::get(
        '/criar-noticia',
        [NoticiasController::class, 'pageCreateNoticia']
    );


    Route::get(
        '/exibir-noticia',
        [NoticiasController::class, 'exibirNoticia']
    );



// ↑↑↑ ROTAS GET ↑↑↑




// ↓↓↓ ROTAS POST ↓↓↓



    Route::post(
        '/teste',
        [NoticiasController::class, 'postTeste']
    );


    Route::post(
        '/index',
        [NoticiasController::class, 'pesquisaQuery']
    );


    Route::post(
        '/criar-categoria',
        [NoticiasController::class, 'createCategoria']
    );


    Route::post(
        '/criar-noticia',
        [NoticiasController::class, 'createNoticia']
    );


    Route::post(
        '/exibir-noticia',
        [NoticiasController::class, 'storeNoticia']
    );



// ↑↑↑ ROTAS POST ↑↑↑