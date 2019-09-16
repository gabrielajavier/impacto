<?php

namespace App\Http\Controllers;

use App\Http\Repository\RootRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class RootController extends Controller
{
     public function index(){
         return view('dashboard.login_root');
     }


     public function login(Request $request){
         $usuario = $request->input('usuario');
         $clave =  $request->input('clave');
         $data = DB::table('usuarios')
                  ->where('usuario',$usuario)
                  ->where('clave',$clave)
                  ->get();

         if(!$data->isEmpty()){
                $role = $data->get(0)->role;
                $this->createSession($request,$usuario,$role);
                return redirect('/panel/categoria/');
            }else{
                $request->session()->flash("mensaje", "Credenciales erroneas");
                return redirect('/login_root');
            }
         }



     public function createSession($request,$session_usuario,$session_role){
         $request->session()->put('usuario', $session_usuario);
         $request->session()->put('role',$session_role);
     }
}
