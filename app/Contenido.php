<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    /*Un contenido pertenece a un usuario*/
    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }

    /*Un contenido le pertenece a una categoria*/
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }


    /*Un contenido puede tener muchos enlaces*/
    public function enlaces(){
        return $this->hasMany(Enlace::class);
    }


    /*Un contenido va a tener muchos tipos de contenidos*/
    public function tipoContenidos(){
        return $this->hasMany(TipoContenido::class);
    }
}
