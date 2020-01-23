<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use Storage;
use File;

class beneficio extends Model{
    protected $table = 'beneficios';

    protected $fillable = ['id_beneficio','nombre','tipo','descripcion','url_beneficio','meta_megas','meta_minutos','meta_sms','meta_mega_alta','meta_otros'];

    static public function get_miembros(){
        return DB::table('beneficios')
        ->get();
    }
    
    static public function get_beneficio_meta(){
        $beneficios = DB::table('beneficios')
            ->join('metas', 'beneficios.id_beneficio', '=', 'metas.id_beneficio')
            ->select('beneficios.*', 'metas.*')
            //->where('miembros.id_categoria', '=', intval($categoria))
            ->get();
        return $beneficios;
    } 

}
