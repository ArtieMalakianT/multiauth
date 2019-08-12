<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pacotes extends Model
{
    protected $table = 'pacotes';
    //protected $primaryKey = 'ID_PACOTE';

    public function pacote()
    {
        return $this->hasMany('App\Models\pacotesCurso','id_pacote');
    }
}
