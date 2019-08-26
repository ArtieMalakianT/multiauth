<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $fillable = ['url','id_sub_categoria'];

    public function sub()
    {
        return $this->belongsTo('App\Models\subCategorias','id_sub_categoria');
    }
}
