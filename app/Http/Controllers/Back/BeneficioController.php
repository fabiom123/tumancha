<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\miembros;
use App\Models\manchas;
use App\Models\beneficio;
use App\Models\acumulado;
use App\User;
use Illuminate\Support\Facades\Auth;
use File;
use Storage;

class BeneficioController extends Controller{
    public function show_beneficio($tipo, $grupo){
        //nombre de mancha
        $categoria = "";
        //lista de beneificios aptos
        $lista_beneficios = array();
        //beneficio all
        $beneficios = beneficio::get_beneficio_meta();
        switch ($tipo) {
            case "grupo":
                $categoria = categoria::get_categorias_by_id($grupo); 
                //acumuldo por grupo -> fecha ini - fecha fin - id grupo
                $miembros_grupo = manchas::get_cantidad_miembros($grupo);
                /* encontrar meta por grupo */
                foreach($beneficios as $key => $beneficio){
                    if($beneficio->miembros <= $miembros_grupo){ 
                        $acumulado_grupox = acumulado::get_acumulado_by_grupo($grupo, $tipo, date($beneficio->fecha_inicio), date($beneficio->fecha_fin));
                        
                        $megasx = 0;
                        $smsx = 0;
                        $minutosx = 0;
                        $megas_altax = 0; 
                        foreach ($acumulado_grupox as $key => $valuex) {
                            $megasx += $valuex->megas;
                            $smsx += $valuex->sms;
                            $minutosx += $valuex->minutos;
                            $megas_altax += $valuex->megas_alta;
                        }
                        if($beneficio->megas <= $megasx && $beneficio->sms <= $smsx && $beneficio->minutos <= $minutosx && $beneficio->megas_alta <= $megas_altax){
                            $lista_beneficios[] = $beneficio;
                        }
                        $megasx = 0;
                        $smsx = 0;
                        $minutosx = 0;
                        $megas_altax = 0;
                    }
                }
                break;
            case "persona":
                foreach($beneficios as $key => $beneficio){
                        $acumulado_grupox = acumulado::get_acumulado_by_grupo($grupo, $tipo, date($beneficio->fecha_inicio), date($beneficio->fecha_fin));
                        
                        $megasx = 0;
                        $smsx = 0;
                        $minutosx = 0;
                        $megas_altax = 0; 
                        foreach ($acumulado_grupox as $key => $valuex) {
                            $megasx += $valuex->megas;
                            $smsx += $valuex->sms;
                            $minutosx += $valuex->minutos;
                            $megas_altax += $valuex->megas_alta;
                        }
                        if($beneficio->megas <= $megasx && $beneficio->sms <= $smsx && $beneficio->minutos <= $minutosx && $beneficio->megas_alta <= $megas_altax){
                            $lista_beneficios[] = $beneficio;
                        }
                        $megasx = 0;
                        $smsx = 0;
                        $minutosx = 0;
                        $megas_altax = 0;
                }
        }
        //var_dump($categoria);exit;
        return view ('front.v_home_beneficio',[
            'lista_beneficios' => $lista_beneficios,
            'tipo'  =>  $tipo,
            'grupo'	=>	$grupo,
            'categoria' => $categoria
        ]);
    }
    
    public function show_beneficio_grupo(){
        $user = Auth::id();
        $grupos = categoria::get_categorias($user);
        return view ('front.v_beneficio_grupo', [
            'user'      =>    $user,
            'grupos'    =>    $grupos,
        ]);
    }
    public function show_beneficio_diario(){
        $user = Auth::id();
        return view ('front.v_beneficio_diario', [
            'user'      =>    $user,
        ]);
    }
    public function store_beneficio(Request $request){
        if( $request->ajax() ){
            $input = $request->all();
            //var_dump($input);exit;
        }
    }
}
