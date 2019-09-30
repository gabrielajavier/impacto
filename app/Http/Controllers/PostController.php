<?php
namespace App\Http\Controllers;

use App\Enlace;
use App\Http\Repository\CategoriaRepository;
use App\Http\Repository\PostRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends controller
{
     public function index(){

         $categorias = DB::table('categoria')->get();
         $data = DB::table('contenidos')
                 ->select('id','categoria_id',
                     'contenidoimagen')
                 ->get();
         $posts = collect(PostRepository::PostsMainContent($data));
         return view('posts',[
                         'posts' => $posts,
                         'categorias' => $categorias
         ]);
     }


     public function updatePostPrincipal(Request $request,$idcontenido){
         $update  =  DB::table('contenidos')
             ->where('id',$idcontenido)
             ->update([
                'categoria_id' => $request->input('idcategoria'),
                'contenidotitulo' => $request->input('titulo'),
                'contenidomain' => $request->input('contenido')
             ]);
          return $update;
     }


     public function updatePostEnlaces(Request $request)
     {
         $enlaces = explode(",", $request->input('titulos'));
         $urls = explode(",", $request->input('urls'));
         $ids = explode(',',$request->input('hiddens'));
         $bandera = false;
         $enlaces_data = CategoriaRepository::dataEnlaces($ids,$enlaces, $urls);
         foreach ($enlaces_data as $enlaces){
              $enlace = Enlace::find($enlaces['id_enlace']);
              $enlace->enlace_titulo = $enlaces['titulo'];
              $enlace->enlace_url = $enlaces['url'];
              $enlace->update();
              $bandera = true;
          }
         return response()->json($bandera);
     }


     public function  getContenido($idcontenido){
        $postsMain = DB::table('contenidos')
                    ->where('id',$idcontenido)
                    ->get();
        return $postsMain;
     }

     public function  getEnlaces($idcontenido){
       $postsEnlaces = DB::table('enlaces')
                    ->select('id','contenido_id','enlace_titulo','enlace_url')
                   ->where('contenido_id',$idcontenido)
                   ->get();
        return $postsEnlaces;
     }
}
