<?php


namespace App\Http\Repository;


use App\TipoContenido;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class CategoriaRepository
{
    public static function dataEnlaces($enlaces,$urls){
        $temp = [];
        for($i=0;$i<5;$i++){
            $array = array(
                'titulo' => $enlaces[$i],
                'url' => $urls[$i]
            );
            array_push($temp,$array);
        }
        return $temp;
    }

    public static function saveContentSecundario($request){
        $tipo_archivo = $request->get('tipo_archivo');
        $secundario = new TipoContenido();
        if($tipo_archivo == "imagenes"){
            $secundario->tipo_contenido_url = null;
            $secundario->tipo_contenido_leyenda = $request->get('titulo_imagen');
            $secundario->tipo_contenido_texto = $request->get('texto_imagen');
            if($archivo=$request->file('contenido_imagen')){
                $nombre_imagen =  $archivo->getClientOriginalName();
                $archivo->move('images',$nombre_imagen);
                $secundario->tipo_contenido_file = $nombre_imagen;
            }
            $secundario->tipo_archivo = $tipo_archivo;
            $secundario->contenido_id = $request->get('idcontenido');
        }else{
            $secundario->tipo_contenido_url = $request->get('video_url');
            $secundario->tipo_contenido_leyenda = $request->get('titulo_video');
            $secundario->tipo_contenido_texto = $request->get('texto_video');
            $secundario->tipo_contenido_file = null;
            $secundario->tipo_archivo = $tipo_archivo;
            $secundario->contenido_id = $request->get('idcontenido');
        }
        return $secundario;
    }

    public static function getIdCategoria($categoria){
        $idcategoria = DB::table('categoria')
            ->select('id')
            ->where('categoria.nombre_categoria','HEROES')
            ->get()[0]->id;
        return $idcategoria;
    }

    public static function getContenido($idcategoria,$idcontenido){
      $contenido = DB::table('contenidos')
            ->join('tipo_contenidos', 'contenidos.id','=','tipo_contenidos.contenido_id')
            ->join('categoria','contenidos.categoria_id','=','categoria.id')
            ->where('categoria.id',$idcategoria)
            ->where('contenidos.id',$idcontenido)
            ->get();
       return $contenido;
    }

    public static function getEnlaces($idcontenido){
      $enlaces = DB::table('enlaces')
                 ->where('enlaces.contenido_id',$idcontenido)
                 ->get();
      return $enlaces;
    }
}
