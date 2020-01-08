<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use Storage;
use File;
class manchas extends Model{
    protected $table = 'miembros';

    protected $fillable = ['id_miembro','id_categoria','id_contacto','nombre','avatar'];

    static public function get_manchas(){
        return DB::table('miembros')
        ->get();
    }
    static public function get_categoria_miembro($id_categoria){
        return DB::table('miembros')
        ->where('id_categoria', '=', $id_categoria)
        ->latest()
        ->first();    
    }
}
