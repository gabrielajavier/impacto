<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardRootController extends Controller
{
    public  function index(){
        $categorias = DB::table('categoria')->get();
        return view('dashboard.panel_categoria',['categorias' => $categorias]);
    }

    public function closeSesion(Request $request){
        if ($request->session()->exists('usuario')) {
            $request->session()->flush();
            return redirect("/login_root");
        }
    }
}
