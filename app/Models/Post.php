<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    //protected $primaryKey = 'ID_POST';

    //Relação com as categorias
    public function categorias()
    {
        return $this->hasOne('App\Models\Categorias','id_categoria');
    }
}
