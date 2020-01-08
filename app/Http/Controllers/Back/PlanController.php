<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\miembros;
use App\Models\plan;
use App\Models\acumulado;
use File;
use Storage;

class PlanController extends Controller{
    public function get_plan_by_contacto(Request $request){
        if( $request->ajax() ){
            $input = $request->all();
            //datos del mi mancha
            $planCont = plan::get_plan_by_contacto($input["id_contacto"]);
            //mis datos
            $planMe = plan::get_plan_by_contacto(2);
            return response()->json(['status' => true, 'new_data' => $planCont, 'me' => $planMe]);
        }
    }
    public function update_plan_by_contacto(Request $request){
        if( $request->ajax() ){

            $input = $request->all();

            $acumulado = array(
                array($input["usuario"],"persona"),
                array($input["grupo"],"grupo"),
            );

            $decrement = plan::decrement_plan_by_contacto($input["id_emisor"], $input["cantidad"]);  

            $increment = plan::increment_plan_by_contacto($input["id_receptor"], $input["cantidad"]);

            $emisor = plan::get_plan_by_contacto($input["id_emisor"]);

            $receptor = plan::get_plan_by_contacto($input["id_receptor"]);

            //acumulador de grupo y usuario
            
            foreach($acumulado as $row => $value){
                $acumulado = new acumulado([
                    'codigo' => intval($value[0]),
                    'tipo' => $value[1],
                    $input["tipo"] => $input["cantidad"],
                    ]);
                $acumulado->save();
            }

            return response()->json(['status' => true, 'emisor' => $emisor, 'receptor' => $receptor]);
        }
    }
}       
