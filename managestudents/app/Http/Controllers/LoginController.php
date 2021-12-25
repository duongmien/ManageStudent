<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class LoginController extends Controller
{
    public function check_login(Request $request)
    {
        $idsv = $request->idsv;
        $password = $request->password;

        $result = DB::table('tbl_user')->where('idsv',$idsv)->where('password',$password)->first();
        if($result){
            Session::put('name',$result->name);
            Session::put('idsv',$result->idsv);
            Session::put('message','Đăng nhập thành công!!!');
            return Redirect::to('/inputinfo');
        }else{
            Session::put('message','Tài khoản hoặc mật khẩu không chính xác!!!');
            return Redirect::to('/');
        }
    }
    public function logout()
    {
        Session::put('name',null);
        Session::put('idsv',null);
        return Redirect::to('/');
    }
}
