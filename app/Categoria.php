<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    /*Tener en cuenta que aqui la relacion es plurar
    entonces la tabla tiene que crearse en plural
    como contenido en la migracion
    */
    /*Una categoria tiene uno o muchos contenidos */
    public function contenidos(){
        return $this->hasMany(Contenido::class);
    }

}
