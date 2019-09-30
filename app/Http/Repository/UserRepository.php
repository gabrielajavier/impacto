<?php


namespace App\Http\Repository;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserRepository
{
    public static function findUser($id){
       return DB::table('usuarios')
                  ->where('id',$id)
                  ->get();
    }

    public static  function editFindUser(Request $request){
        return DB::table('usuarios')
               ->where('id',$request->get('id'))
               ->update([
                     'nombres' => $request->get('nombres'),
                     'apellidos' => $request->get('apellidos'),
                     'usuario' => $request->get('usuario'),
                     'email' => $request->get('correo') ,
                     'clave' => $request->get('clave'),
                     'estado' => $request->get('estado')
              ]);
    }

    public static function getFirstName($nombres){
        $firstname = explode(',',$nombres)[0];
        return $firstname;
    }
}
