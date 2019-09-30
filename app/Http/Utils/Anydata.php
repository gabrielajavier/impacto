<?php


namespace App\Http\Utils;


use App\Categoria;
use Illuminate\Support\Facades\DB;

class Anydata
{
     public static  function getCategoria($idcategoria){
        $categoria = DB::table('categoria')
                    ->select('nombre_categoria')
                    ->where('id',$idcategoria)
                    ->get()[0]->nombre_categoria;
        return $categoria;
     }
}
