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
        return $this->hasOne('App\Models\Cursos','id_curso');
    }

    public function pacote()
    {
        return $this->hasOne('App\Models\Pacotes','id_pacote');
    }
        
}
