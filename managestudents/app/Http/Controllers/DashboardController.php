<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('id');
        $role_id = Session::get('idrole');
        if($role_id==1){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('/')->send();
        }
    }
    public function dashboard()
    {
        $this->AuthLogin();
        $allnganh = DB::table('tbl_nganh')->get();
        $allkhoa = DB::table('tbl_khoa')->get();
        $alllopsh = DB::table('tbl_lopsh')->get();
        $alluser = DB::table('tbl_user')->get();

        $u = count($alluser);
        $k = count($allkhoa);
        $n = count($allnganh);
        $l = count($alllopsh);

        Session::put('u',$u);
        Session::put('k',$k);
        Session::put('n',$n);
        Session::put('l',$l);

        return view('admin.dashboard');
    }
}
