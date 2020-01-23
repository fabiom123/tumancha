<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use Storage;
use File;

class categoria extends Model{

    protected $table = 'categoria';

    protected $fillable = ['id_categoria','id_usuario','nombre','tipo','url_icono'];

    static public function get_categorias($id_usuario){
        return DB::table('categoria')
        ->where('id_usuario', '=', $id_usuario)
        ->get();
    }
    static public function get_categorias_by_id($id_categoria){
        return DB::table('categoria')
        ->where('id_categoria', '=', $id_categoria)
        ->first();
    }
    static public function get_categoria_first($id_usuario){
        return DB::table('categoria')
        ->where('id_usuario', '=', $id_usuario)
        ->first();
    }
}
