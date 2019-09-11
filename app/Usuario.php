<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

   /*Un Usuario puede publicar muchos contenidos*/
   public function contenidos(){
     return $this->hasMany(Contenido::class);
   }

}
