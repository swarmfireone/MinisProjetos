<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;


class Noticia extends Model
{
    // Nome da tabela
    protected $table = 'Noticias';

    // Nome do ID
    protected $primaryKey = 'noticia_id';
    // ID será AI (auto generate)
    public $increment = true;

    // Colunas da tabela
    protected $fillable = [
        // Nenhum dado é passível de ser alterado por enquanto
        'noticia_titulo',
        'noticia_descricao',
        'noticia_pathCapa',
        'created_at',
        'updated_at'
    ];


    // Devolve todos os Roles de uma notícia
    public function categorias()
    {
        return $this->belongsToMany(
            related: Categoria::class,
            table: 'Categorias-Noticias',
            foreignPivotKey: 'noticia_identification',      // A ForeignKey que é composta pela Entidade Noticia
            relatedPivotKey: 'categoria_identification'     // A outra ForeignKey que dá a relação de Many To Many, ligada a outra Entidade   
        );
    }
}