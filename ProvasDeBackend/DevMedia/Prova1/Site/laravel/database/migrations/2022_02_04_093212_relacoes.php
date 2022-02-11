<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'Relacoes',
            function (Blueprint $table)
            {
                $table->increments('relacao_id');
                
                $table->integer(column: 'noticia_identification', unsigned: true);
                $table->foreign('noticia_identification')->references('noticia_id')->on('Noticias')
                    ->onDelete('cascade');
                    
                $table->integer(column: 'categoria_identification', unsigned: true);
                $table->foreign('categoria_identification')->references('categoria_id')->on('Categorias')
                    ->onDelete('cascade');

            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Relacoes');
    }
}
