<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use Storage;
use File;

class acumulado extends Model{

    protected $table = 'acumulado';

    protected $fillable = ['id','tipo','codigo','megas','minutos','sms','megas_alta'];

    static public function get_categorias(){
        return DB::table('acumulado')
        ->get();
    }
}
