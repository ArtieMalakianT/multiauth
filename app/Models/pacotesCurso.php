<?php

namespace App\Models;

use App\Models\Cursos;
use Illuminate\Database\Eloquent\Model;

class pacotesCurso extends Model
{
    protected $table = 'cursos_pacotes';
    //protected $primaryKey = 'ID_PACOTES_CURSOS';

    public function cursos()
    {
        return $this->hasMany('App\Models\Cursos','id');
    }

    public function pacote()
    {
        return $this->hasOne('App\Models\Pacotes','id');
    }
    public function matricula()
    {
        return $this->hasMany('App\Models\Matricula','id_pacotes_cursos');
    }
        
}
