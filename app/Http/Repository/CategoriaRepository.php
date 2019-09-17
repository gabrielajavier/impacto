<?php


namespace App\Http\Repository;


use App\TipoContenido;
use Illuminate\Support\Facades\Request;

class CategoriaRepository
{
    public static function dataEnlaces($data){
        $temp = [];
        for($i=0;$i<count($data->get('enlace'));$i++){
            $array = array(
                'titulo' => $data['enlace'][$i],
                'url' => $data['url'][$i]
            );
            array_push($temp,$array);
        }
        return $temp;
    }

    public static function saveContentSecundario($request,$idcontenido,$tipo_archivo){
        $secundario = new TipoContenido();
        if($tipo_archivo == "imagenes"){
            $secundario->tipo_contenido_url = null;
            $secundario->tipo_contenido_leyenda = $request->input('titulo_imagen');
            $secundario->tipo_contenido_texto = $request->input('texto_imagen');
            if($archivo=$request->file('file_imagen')){
                $nombre_imagen =  $archivo->getClientOriginalName();
                $archivo->move('images',$nombre_imagen);
                $secundario->tipo_contenido_file = $nombre_imagen;
            }
            $secundario->tipo_archivo = $tipo_archivo;
            $secundario->contenido_id = $idcontenido;
        }else{
            $secundario->tipo_contenido_url = $request->input('video_url');
            $secundario->tipo_contenido_leyenda = $request->input('titulo_video');
            $secundario->tipo_contenido_texto = $request->input('texto_video');
            $secundario->tipo_contenido_file = null;
            $secundario->tipo_archivo = $tipo_archivo;
            $secundario->contenido_id = $idcontenido;
        }
        return $secundario;
    }
}
