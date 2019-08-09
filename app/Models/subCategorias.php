<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subCategorias extends Model
{
    //Relação com Posts
    public function posts()
    {
        return $this->hasMany('App\Models\Post','id_sub_categoria');
    }
    //Retorna a categoria Pai
    public function categoria()
    {
        return $this->belongsTo('App\Models\Categorias','id_categoria');
    }
}
