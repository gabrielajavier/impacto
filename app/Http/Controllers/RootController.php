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
         $data_root = DB::table('root')->get();
         $role = $data_root->get(0)->role;


         if(!$data_root->isEmpty()){
            $bandera = RootRepository::validateLogin($usuario,$clave,$data_root);
            if($bandera->last() == true){
                $this->createSession($request,$usuario,$role);
                return redirect('/panel/noticias');
            }else{
                $request->session()->flash("mensaje", "Credenciales erroneas");
                return redirect('/login_root');
            }
         }
     }



     public function createSession($request,$session_usuario,$session_role){
         $request->session()->put('usuario_root', $session_usuario);
         $request->session()->put('role',$session_role);
     }
}
