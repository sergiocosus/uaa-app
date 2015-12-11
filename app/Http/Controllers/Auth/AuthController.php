<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

//    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    public function postLogin(Request $request)
    {
        $id = $request->get('id',null);
        $password = $request->get('password',null);
        $remember = $request->get('remember',false);
        if(Auth::attempt([
                'id' => $id,
                'password' => $password,
            ],$remember)){
            return \Response::json(['success'=>true],200);
        }else{
            return \Response::json(['success'=>false],400);
        }
    }

    public function getLogout(){
         Auth::logout();
        return ['success'=> true];
    }
}
