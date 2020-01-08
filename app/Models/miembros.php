<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use Storage;
use File;

class miembros extends Model{
    protected $table = 'contactos';

    protected $fillable = ['id','nom','numero','imgUrl','dni'];

    static public function get_miembros(){
        return DB::table('contactos')
        ->get();
    } 

    static public function get_miembros_by_id($id){
        return DB::table('contactos')
        ->where('id', '=', intval($id))
        ->first();
    }

    static public function get_contactos_miembros($categoria){
        //var_dump(intval($categoria));exit;
        $users = DB::table('contactos')
            ->join('miembros', 'contactos.id', '=', 'miembros.id_contacto')
            //->leftJoin('miembros', 'contactos.id', '=', 'miembros.id_contacto')
            ->select('contactos.*', 'miembros.*')
            ->where('miembros.id_categoria', '=', intval($categoria))
            //->orWhere('miembros.id_categoria', '=', NULL)
            ->get();
        return $users;
    }
    
}
