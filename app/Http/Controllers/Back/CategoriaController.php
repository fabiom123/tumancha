<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\miembros;
use App\Models\manchas;
use App\Models\plan;
use App\User;
use File;
use Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class CategoriaController extends Controller{

    public function store_categoria(Request $request){
        if( $request->ajax() ){

            $input = $request->all();
            
            if ($request->hasFile('url_icono')){
                $filename = $request->file('url_icono')->getClientOriginalName();
                $file = file_get_contents($request->file('url_icono')->getRealPath());
                Storage::disk('categoria')->put($filename, $file);
                $input['url_icono'] = $filename;
            }

            $categoria = categoria::create($input);
            $catALL = categoria::get_categorias($input['id_usuario']);
            $manALL = manchas::get_manchas();

            return response()->json(['status' => true, 'categorias' => $catALL, 'manchas' => $manALL]);
        }
    }

    public function store_miembro(Request $request){
        if( $request->ajax() ){

            $input = $request->all();
            //$file = base64_to_img($img, $input['avatar']);
            if ($request->hasFile('avatar')) {
                $filename = trim($request->file('avatar')->getClientOriginalName());
                $file = file_get_contents($request->file('avatar')->getRealPath());
                Storage::disk('usuario')->put($filename, $file);
                $input['avatar'] = $filename;
            }
            //$id_categoria = intval(manchas::create($input)->id_categoria);
            /********* crear usuario para el miembro *********/
            $telefono = strval(mt_rand(100000000,999999999));
            $dni = strval(mt_rand(10000000,99999999));
            $now = Carbon::now();
            $user = new User;
            $user->name = $input['nombre'];
            $user->email = $input['nombre'];
            $user->telefono = $telefono;
            $user->dni = $dni;
            $user->url_image = $input['avatar'];
            $user->roles_id = "1";
            $user->password = Hash::make($dni);
            $user->created_at = $now->toDateTimeString();
            $user->updated_at = $now->toDateTimeString();
            $user->save();
            /********* end usuario **********/
            /********** crear miembro *********/
            $mancha = new manchas;
            $mancha->nombre = $input['nombre'];
            $mancha->id_categoria = $input['id_categoria'];
            $mancha->id_contacto = $user->id;
            $mancha->id_google = $input['id_google'];
            $mancha->avatar = $input['avatar'];
            $mancha->created_at = $now->toDateTimeString();
            $mancha->updated_at = $now->toDateTimeString();
            $mancha->save();
            //var_dump($mancha->id_contacto);exit;
            $miembroCat = manchas::get_categoria_miembro($mancha->id_contacto);
            //var_dump($miembroCat);exit;
            /********** end miembro *********/
            /****** crear plan para usuario ********/
            $megas = strval(mt_rand(1000,9999));
            $plan = new plan;
            $plan->nombre = 'Entel Power';
            $plan->id_contacto = $user->id;
            $plan->tipo = 'pre-pago';
            $plan->megas = $megas;
            $plan->minutos = $megas;
            $plan->sms = $megas;
            $plan->created_at = $now->toDateTimeString();
            $plan->updated_at = $now->toDateTimeString();
            $plan->save();
            /****** end plan ******/
            $new_data = [
                            'nombre' => $miembroCat->nombre,
                            'avatar' => $miembroCat->avatar,
                            'id_categoria' => $miembroCat->id_categoria,
                            'id_contacto' => $miembroCat->id_contacto,
                            'id_google' => $miembroCat->id_google,
                        ];
            //var_dump($new_data);exit;            
            return response()->json(['status' => true, 'new_data' => $new_data]);
        }
    }

    function base64_to_img($base64_string, $output_file) {
        $ifp = fopen($output_file, "wb"); 
    
        $data = explode(',', $base64_string);
    
        fwrite($ifp, base64_decode($data[1])); 
        fclose($ifp); 
    
        return $output_file; 
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

    public function getUserExits(){

    } 
}
