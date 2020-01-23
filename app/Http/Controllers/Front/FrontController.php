<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\miembros;
use App\Models\manchas;
use App\Models\acumulado;
use Illuminate\Support\Facades\Auth;
use App\User;
use File;
use Storage;
use Google;
use Config;

class FrontController extends Controller{
    //
    public function index(Request $request){
        $id = Auth::id();
        $users   =   miembros::get_miembros_by_id(2);
        $grupo   =   categoria::get_categoria_first();
        return view ('front.v_home_mancha', [
            'user'      =>    $users,
            'grupo'     =>    $grupo,
        ]);
    }

    public function categorias($seccion){
        $id_usuario = Auth::id();
        //var_dump($id);exit;
        $user = miembros::get_miembros_by_id(2);
        $grupo = categoria::get_categoria_first($id_usuario);
    	switch ($seccion) {
		    case 'familia':
                $categorias           =   categoria::get_categorias($id_usuario);
                $miembros             =   miembros::get_miembros(); 
                $manchas              =   manchas::get_manchas();
                return view ('front.v_home_categoria',[
                    'categorias'	=>	$categorias,
                    'miembros'	    =>	$miembros,
                    'manchas'	    =>	$manchas,
                    'user'          =>  $user,
                    'grupo'         =>  $grupo,
    			]);
            break;
            case 'grupo':
                $locations           =   "grupo";
                return view ('front.v_home_grupo',[
                    'grupo'	=>	$locations,
                    'user'  =>  $user,
                    'grupo' =>  $grupo,
                ]);
            break;
            case 'beneficio':
                $locations           =   "beneficio";
                return view ('front.v_home_beneficio',[
                    'beneficio'	=>	$locations,
                    'user'  =>  $user,
                    'grupo' =>  $grupo,
                ]);
            break;
            case 'test':
                $locations           =   "beneficio";
                return view ('front.test',[
                    'beneficio'	=>	$locations,
                    'user'  =>  $user,
                    'grupo' =>  $grupo,
                ]);
            break;
        }
    }
}
