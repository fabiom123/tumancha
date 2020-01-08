<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use Storage;
use File;

class categoria extends Model{

    protected $table = 'categoria';

    protected $fillable = ['id_categoria','nombre','tipo','url_icono'];

    static public function get_categorias(){
        return DB::table('categoria')
        ->get();
    }
    static public function get_categoria_first(){
        return DB::table('categoria')
        ->first();
    }
}
