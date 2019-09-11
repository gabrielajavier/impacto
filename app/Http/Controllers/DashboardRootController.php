<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardRootController extends Controller
{
    public  function index(){
        $categorias = DB::table('categoria')->get();
        return view('dashboard.panel_noticias',['categorias' => $categorias]);
    }


    public function especial(){
        return view('dashboard.panel_especial');
    }


    public function musica(){
        return view('dashboard.panel_musica');
    }

    public function literatura(){
        return view('dashboard.panel_literatura');
    }

    public function heroes(){
        return view('dashboard.panel_heroes');
    }


    public function closeSesion(Request $request){
        if ($request->session()->exists('usuario_root')) {
            $request->session()->forget('usuario_root');
            return redirect("/login_root");
        }
    }
}
