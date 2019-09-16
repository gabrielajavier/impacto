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
               $request->session()->put('s_contenido',$contenido->id);
           }
           $request->session()->flash("mensaje", "Contenido Creado");
           return redirect('/panel/categoria');
     }


     public function saveEnlaces(Request $request,$id){
        $idcontenido = $id;
        $collect  = collect($request->all())->except('_token');
        $enlaces_data = CategoriaRepository::dataEnlaces($collect);

        foreach ($enlaces_data as $enlace){
            $enlaces = new Enlace;
            $enlaces->contenido_id = $idcontenido;
            $enlaces->enlace_titulo = $enlace["titulo"];
            $enlaces->enlace_url = $enlace["url"];
            $enlaces->save();
        }
         $request->session()->flash("mensaje2", "Enlaces Creados");
         return redirect('/panel/categoria');
     }


     public function saveSecundario(Request $request,$id)
     {
         $idcontenido = $id;
         $tipo_archivo = $request->input('tipo_archivo');

         if($tipo_archivo == "imagenes"){
            $this->data = CategoriaRepository::saveContentSecundario($request,$idcontenido,$tipo_archivo);
         }

          if($this->data->save()){
              $request->session()->flash("mensaje3", "Contenido Secundario Creado");
              return redirect('/panel/categoria');
          }
     }

     public  function saveSecundarioTwo(Request $request,$id){
         $idcontenido = $id;
         $tipo_archivo = $request->input('tipo_archivo');
         $data = null;
         if($tipo_archivo == "imagenes"){
             $data = CategoriaRepository::saveContentSecundario($request,$idcontenido,$tipo_archivo);
         }

         if($data->save()){
             $request->session()->flash("mensaje4", "Contenido Secundario Creado");
             return redirect('/panel/categoria');
         }
     }


}
