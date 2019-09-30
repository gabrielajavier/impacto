<?php


namespace App\Http\Utils;


class FormatoFecha
{
   public static function getMes($mes){
       $meses = array( "Enero", "Febrero", "Marzo",
                      "Abril", "Mayo", "Junio",
                      "Julio", "Agosto", "Setiembre",
                      "Octubre", "Noviembre", "Diciembre");
       return $meses[intval($mes)-1];
   }
}
