<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Noticia;


class Categoria extends Model
{
    // Nome da tabela
    protected $table = 'Categorias';

    // Nome do ID
    protected $primaryKey = 'categoria_id';
    // ID será AI (auto generate)
    public $increment = true;

    // Colunas da tabela
    protected $fillable = [
        'categoria_nome',
        'created_at',
        'updated_at'
    ];


    // Retorna as noticias que estão cadastradas com essa Categoria
    public function noticias()
    {
        return $this->belongsToMany(
            related: Noticia::class,
            table: 'Categorias-Noticias',
            foreignPivotKey: 'categoria_identification',
            relatedPivotKey: 'noticia_identification'
        );
    }

}
