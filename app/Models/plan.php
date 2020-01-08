<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use Storage;
use File;

class plan extends Model{
    protected $table = 'plan';

    protected $fillable = ['id_plan','nombre','id_contacto','megas','minutos','sms'];

    static public function get_plan(){
        return DB::table('plan')
        ->get();
    }
    static public function get_plan_by_contacto($id_contacto){
        //var_dump(intval($categoria));exit;
        $plan = DB::table('plan')
            ->where('id_contacto', '=', intval($id_contacto))
            ->first();
        return $plan;
    } 
    static public function decrement_plan_by_contacto($id_contacto, $cantidad){
        //var_dump(intval($categoria));exit;
        $decrement = DB::table('plan')
            ->where('id_contacto', '=', intval($id_contacto))
            ->decrement('megas', $cantidad);
        return $decrement;
    }
    static public function increment_plan_by_contacto($id_contacto, $cantidad){
        //var_dump(intval($categoria));exit;
        $increment = DB::table('plan')
            ->where('id_contacto', '=', intval($id_contacto))
            ->increment('megas', $cantidad);
        return $increment;
    }
}
