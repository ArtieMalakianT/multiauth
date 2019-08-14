<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';
    //protected $primaryKey = 'ID_CATEGORIA';

    //Inverso da relação com posts
    public function posts()
    {
        return $this->hasMany('App\Models\Post','id_categoria');
    }
    //Retornar todas as subcategorias
    public function sub()
    {
        return $this->hasMany('App\Models\subCategorias','id_categoria');
    }
    //Retorna todos os cursos da categoria
    public function cursos()
    {
        return $this->hasMany('App\Models\Cursos','id_categoria');
    }
    public function pacotes()
    {
        return $this->hasMany('App\Models\Pacotes','id_categoria');
    }
}
