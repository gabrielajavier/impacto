<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /*Una categoria tiene uno o muchos contenidos */
    public function contenidos(){
        return $this->hasMany(Contenido::class);
    }

}
