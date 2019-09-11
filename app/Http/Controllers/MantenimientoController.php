<?php

namespace App\Http\Controllers;

use App\Http\Repository\UserRepository;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MantenimientoController extends Controller
{
    public function index(){
        $users = DB::table('usuarios')->get();
        return view('dashboard.panel_mantenimiento',['users' => $users]);
    }

    public function addUser(Request $request){
         $action = $request->input('action');
         if($action == "add"){
               $usuario = new Usuario;
               $usuario->user = $request->input('usuario');
               $usuario->email = $request->input('correo');
               $usuario->password = $request->input('clave');
               $usuario->estado = $request->input('estado');
               $usuario->role = "admin";
               return response()->json($usuario->save())->content();
         }
    }

    public function editUser($id){
        $user = UserRepository::findUser($id);
        return response()->json($user);
    }


    public function menu(){
        $categorias = DB::table('categoria')->get();
        return response()->json($categorias);
    }



    public function saveEditUser(Request $request){
        $updated = UserRepository::editFindUser($request);
        if($updated){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
