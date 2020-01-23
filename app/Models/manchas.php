<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use Storage;
use File;
class manchas extends Model{
    protected $table = 'miembros';

    protected $fillable = ['id_miembro','id_categoria','id_contacto','nombre','avatar','id_google'];

    static public function get_manchas(){
        return DB::table('miembros')
        ->get();
    }
    static public function get_categoria_miembro($id_contacto){
        return DB::table('miembros')
        ->where('id_contacto', '=', $id_contacto)
        ->first();    
    }
    static public function get_cantidad_miembros($id_categoria){
        return DB::table('miembros')
        ->where('id_categoria', '=', intval($id_categoria))
        ->count();
    }
}
