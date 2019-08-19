<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacoes extends Model
{
    public $fillable = array('id_user','comment');

    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }
}
