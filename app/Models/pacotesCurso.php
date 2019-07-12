<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pacotesCurso extends Model
{
    protected $table = 'cursos_pacotes';
    protected $primaryKey = 'ID_PACOTES_CURSOS';

    public function many()
    {
        return $this->hasManyThrough('App\Models\Pacotes','App\Models\Cursos','ID_PACOTE','ID_CURSO');
    }
}
