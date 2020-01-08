<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\miembros;
use App\Models\manchas;
use App\Models\beneficio;
use File;
use Storage;

class BeneficioController extends Controller{
    public function show_beneficio($grupo){
        return view ('front.v_home_beneficio',[
            'grupo'	=>	$grupo,
        ]);
    }
    public function store_beneficio(Request $request){
        if( $request->ajax() ){
            $input = $request->all();
            //var_dump($input);exit;
        }
    }
}
