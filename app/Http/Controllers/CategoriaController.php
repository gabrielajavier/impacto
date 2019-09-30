<?php

namespace App\Http\Controllers;

use App\Contenido;
use App\Enlace;
use App\Http\Repository\CategoriaRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoriaController extends Controller
{

    private $data;

    public function index(Request $request){
        return view('dashboard.panel_noticias');
    }

    public function saveContenidoPrincipal(Request $request){
        $bandera = false;
        $usuario = $request->session()->get('usuario');
        $usuario_id = DB::table('usuarios')->where('usuario',
          $usuario)->value('id');

        $contenido = new Contenido;
        $contenido->usuario_id = $usuario_id;
        $contenido->categoria_id = $request->input('idcategoria');
        $contenido->contenidotitulo = $request->input('contenido_titulo');
        $contenido->contenidomain = $request->input('contenido_main');

        if($archivo=$request->file('contenido_imagen')){
           $nombre_imagen =  $archivo->getClientOriginalName();
           $archivo->move('images',$nombre_imagen);
           $contenido->contenidoimagen = $nombre_imagen;
         }

           if($contenido->save()){
               $id_categoria = $contenido->id;
               $bandera = true;
           }
           return response()->json([$bandera,$id_categoria]);
     }


     public function saveEnlaces(Request $request){
        $enlaces = explode(",",$request->input('enlace'));
        $urls = explode(",",$request->input('url'));
        $bandera = false;
        $enlaces_data = CategoriaRepository::dataEnlaces2($enlaces,$urls);
        foreach ($enlaces_data as $enlace){
            $enlacess = new Enlace;
            $enlacess->contenido_id = $request->get('idcontenido');
            $enlacess->enlace_titulo = $enlace["titulo"];
            $enlacess->enlace_url = $enlace["url"];
            $enlacess->save();
            $bandera = true;
        }
        return response()->json($bandera);
     }


     public function saveSecundario(Request $request)
     {
          $bandera = false;
          $data = CategoriaRepository::saveContentSecundario($request);
          if($data->save()){
              $bandera = true;
          }
           return response()->json($bandera);
     }

     public  function saveSecundarioTwo(Request $request){
         $bandera = false;
         $data = CategoriaRepository::saveContentSecundario($request);
         if($data->save()){
             $bandera = true;
         }
         return response()->json($bandera);
     }


     public function saveSecundarioThree(Request $request){
         $bandera = false;
         $data = CategoriaRepository::saveContentSecundario($request);
         if($data->save()){
             $bandera = true;
         }
         return response()->json($bandera);
     }


     public function saveVideo(Request $request){
         $data = CategoriaRepository::saveContentSecundario($request);
         return response()->json($data->save());
     }
}
