<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function noticias(){
        $noticias = DB::table('contenidos')
          ->where('categoria_id',1)->get();
         return view('categoria-noticia',['noticias' => $noticias,'categoria'=>'noticias']);
    }

    public function especial(){
        $especial = DB::table('contenidos')
            ->where('categoria_id',2)->get();
        return view('categoria-especial',['especiales' => $especial,'categoria'=>'especial']);
    }

    public function musica(){
        return view('categoria-musica');
    }

    public function literatura(){
        $literatura = DB::table('contenidos')
            ->where('categoria_id',4)->get();
       return view('categoria-literatura',['literaturas' => $literatura,'categoria'=>'literatura']);
    }


     public function heroes(){
         $heroe = DB::table('contenidos')
             ->where('categoria_id',5)->get();
         return view('categoria-heroes',['heroes' => $heroe,'categoria'=>'heroes']);
     }


    public function suscribete(){
        return view('suscribete');
    }
}
