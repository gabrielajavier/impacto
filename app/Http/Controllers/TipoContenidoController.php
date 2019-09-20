<?php


namespace App\Http\Controllers;

use App\Http\Repository\CategoriaRepository;


class TipoContenidoController extends  Controller
{
    public function index($categoria,$idcontenido)
    {
        $idcategoria = CategoriaRepository::getIdCategoria($categoria);
        $contenido = CategoriaRepository::getContenido($idcategoria, $idcontenido);
        $enlaces = CategoriaRepository::getEnlaces($idcontenido);
        $contenidotitulo = $contenido[0]->contenidotitulo;
        $contenidomain = $contenido[0]->contenidomain;
        $count_items = $contenido->count();

        if ($count_items > 1){
            return view('contenido_images', ['categoria' => $categoria,
                'contenidotitulo' => $contenidotitulo,
                'contenidomain' => $contenidomain,
                'contenidos' => $contenido,
                'enlaces' => $enlaces
                ]);
        } else {
            return view('contenido_video',[
                'categoria' => $categoria,
                'contenidotitulo' => $contenidotitulo,
                'contenidomain' => $contenidomain,
                'contenido' => $contenido[0],
                'enlaces' => $enlaces
            ]);
        }
    }
}
