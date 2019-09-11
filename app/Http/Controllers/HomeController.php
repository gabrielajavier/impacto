<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function noticias(){
        return view('categoria-noticia');
    }


    public function especial(){
        return view('categoria-especial');
    }

    public function musica(){
        return view('categoria-musica');
    }

    public function literatura(){
       return view('categoria-literatura');
    }


     public function heroes(){
        return view('categoria-heroes');
     }


    public function suscribete(){
        return view('suscribete');
    }
}
