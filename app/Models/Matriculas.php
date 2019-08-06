<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matriculas extends Model
{
    public $fillable = array('id_cursos_pacotes','id_user','id_status');

    public function aluno()
    {
        return $this->hasOne('App\User','id');
    }
    public function pacotes()
    {
        return $this->belongsTo('App\Models\pacotesCurso','id_cursos_pacotes');
    }
}
