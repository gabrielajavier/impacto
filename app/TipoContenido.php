<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoContenido extends Model
{
    /*Un TipoCotenido le va a pertenecer a un determinado contenido*/
    public function contenido(){
        return $this->belongsTo(Contenido::class);
    }
}
