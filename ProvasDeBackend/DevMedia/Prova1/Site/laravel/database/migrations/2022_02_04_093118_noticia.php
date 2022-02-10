<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Noticia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'Noticias',
            function (Blueprint $table)
            {
                $table->increments(column: 'noticia_id');
                
                $table->string(column: 'noticia_titulo', length: 40);
                $table->string(column: 'noticia_descricao', length: 300);
                $table->string(column: 'noticia_pathCapa', length: 255)->nullable();

                $table->timestamps();
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
        Schema::drop('Noticias');
    }
}
