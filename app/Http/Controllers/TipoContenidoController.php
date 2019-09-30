<?php


namespace App\Http\Controllers;

use App\Http\Repository\CategoriaRepository;
use App\Http\Repository\ContenidoRepository;
use App\Http\Utils\FormatoFecha;
use DateTime;


class TipoContenidoController extends  Controller
{
    public function index($categoria,$idcontenido)
    {
        $idcategoria = CategoriaRepository::getIdCategoria($categoria);
        $contenido = CategoriaRepository::getContenido($idcategoria, $idcontenido);
        $fecha_aux = new DateTime($contenido[0]->created_at);
        $dia = $fecha_aux->format('d');
        $mes = FormatoFecha::getMes($fecha_aux->format('m'));
        $ano = $fecha_aux->format('Y');

        $usuario = CategoriaRepository::getUsuarios($contenido[0]->usuario_id);
        $enlaces = CategoriaRepository::getEnlaces($idcontenido);
        $contenidotitulo = $contenido[0]->contenidotitulo;
        $contenidomain = $contenido[0]->contenidomain;
        $count_items = $contenido->count();

        //Actualizar Views de Post
        ContenidoRepository::updateViews($idcontenido,
             $contenido[0]->contenidoviews);

        if ($count_items > 1){
            return view('contenido_images', ['categoria' => $categoria,
                'contenidotitulo' => $contenidotitulo,
                'contenidomain' => $contenidomain,
                'contenidos' => $contenido,
                'fecha' => "$dia del $mes del $ano",
                'usuario' => $usuario,
                'enlaces' => $enlaces
                ]);
        } else {
            return view('contenido_video',[
                'categoria' => $categoria,
                'contenidotitulo' => $contenidotitulo,
                'contenidomain' => $contenidomain,
                'contenido' => $contenido[0],
                'fecha' => "$dia del $mes del $ano",
                'usuario' => $usuario,
                'enlaces' => $enlaces
            ]);
        }
    }
}
