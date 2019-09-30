<?php


namespace App\Http\Repository;


use Illuminate\Support\Facades\DB;

class ContenidoRepository
{
   public static function updateViews($idcontenido,$viewsactual){
       $viewsnew = $viewsactual + 1;
       DB::table('contenidos')
           ->where('contenidos.id',$idcontenido)
           ->update([
               'contenidoviews' => $viewsnew
           ]);
   }
}
