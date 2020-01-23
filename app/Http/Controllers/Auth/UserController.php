<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller{
    //
    public function show(Request $request){
        $user   =  'orlando';
        var_dump($user);exit;
        return view ('front.v_home_mancha', [
            'user'      =>    $users,
        ]);
    }
}
