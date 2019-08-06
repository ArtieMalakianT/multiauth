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
        return $this->belongsTo('App\Models\Categorias','id_categoria');
    }  
    //Relação com todas SubCategorias
    public function sub()
    {
        return $this->belongsTo('App\Models\subCategorias','id_sub_categoria');
    }  
    //Autor do post
    public function author()
    {
        return $this->belongsTo('App\Admin','id_user');
    }
}
