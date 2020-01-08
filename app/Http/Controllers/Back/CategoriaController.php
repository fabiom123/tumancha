<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\miembros;
use App\Models\manchas;
use File;
use Storage;

class CategoriaController extends Controller{
    public function store_categoria(Request $request){
        if( $request->ajax() ){

            $input = $request->all();
           
            //var_dump($input);exit;
            if ($request->hasFile('url_icono')) {
                $filename = $request->file('url_icono')->getClientOriginalName();
                $file = file_get_contents($request->file('url_icono')->getRealPath());
                Storage::disk('categoria')->put($filename, $file);
                $input['url_icono'] = $filename;
            }

            $categoria = categoria::create($input);

            $catALL = categoria::get_categorias();
            $manALL = manchas::get_manchas();

            return response()->json(['status' => true, 'categorias' => $catALL, 'manchas' => $manALL]);
        }
    }

    public function store_miembro(Request $request){
        if( $request->ajax() ){

            $input = $request->all();
           
            //var_dump($input);exit;

            //$miembro = manchas::create($input);

            $id_categoria = intval(manchas::create($input)->id_categoria);
             
            $miembroCat = manchas::get_categoria_miembro($id_categoria);
            //var_dump($miembroCat);exit;
            $new_data = [
                            'nombre' => $miembroCat->nombre,
                            'avatar' => $miembroCat->avatar,
                            'id_categoria' => $miembroCat->id_categoria,
                            'id_contacto' => $miembroCat->id_contacto,
                        ];
            //var_dump($new_data);exit;            
            return response()->json(['status' => true, 'new_data' => $new_data]);
        }
    }

    public function store_contacto(Request $request){
        if( $request->ajax() ){
            $input = $request->all();
            $miembros  = miembros::get_contactos_miembros($input["categoria"]);  
            $contacto = miembros::get_miembros();
            $data = array();
            $data2 = array();
            foreach($contacto as $key => $contact){
                foreach($miembros as $miembro){
                    if($contact->id == $miembro->id_contacto){
                        $data[$key]['nombre'] = $contact->nom;
                        $data[$key]['avatar'] = $contact->imgUrl;
                        $data[$key]['idcont'] = $contact->id;
                        $data[$key]['estado'] = '1';
                    }else{
                        $data2[$key]['nombre'] = $contact->nom;
                        $data2[$key]['avatar'] = $contact->imgUrl;
                        $data2[$key]['idcont'] = $contact->id;
                        $data2[$key]['estado'] = '0';
                    }
                }
            }
           
            $valor = array_diff_key($data2,$data);
            $valor2 = array_intersect_key($data,$data2);
            $valor3 = array_merge($valor,$valor2);

            if(!empty($valor3)){
                $respuesta = $valor3;
                $status = true;
            }else{
                $respuesta = $contacto;
                $status = false;
            }
            
            return response()->json(['status' => $status, 'contacto' => $respuesta]);
        }
    }

}
