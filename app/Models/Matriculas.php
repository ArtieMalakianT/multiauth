<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matriculas extends Model
{
    public $fillable = array('id_pacote','id_user','id_status');

    public function aluno()
    {
        return $this->belongsTo('App\User','id_user');
    }
    public function pacotes()
    {
        return $this->belongsTo('App\Models\Pacotes','id_pacote');
    }
    public function status()
    {
        return $this->belongsTo('App\Models\statusMatricula','id_status');
    }
}
