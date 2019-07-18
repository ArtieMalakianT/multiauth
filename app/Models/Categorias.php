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
}
