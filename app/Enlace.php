<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enlace extends Model
{
    /*Un enlace pertence a un determinado contenido*/
    public function contenido(){
       return $this->belongsTo(Contenido::class);
    }
}
