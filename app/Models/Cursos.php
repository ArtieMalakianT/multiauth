<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    
    protected $table = 'cursos';
    //protected $primaryKey = 'ID_CURSOS';

    public function curso()
    {
        return $this->hasOne('App\Models\Cursos','id_curso');
    }
}
