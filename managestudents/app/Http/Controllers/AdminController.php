<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function all_user()
    {
        return view('admin.all_user');
    }
    public function add_user()
    {
        $id = Session::get('id');
        $allnganh = DB::table('tbl_nganh')->get();
        $allkhoa = DB::table('tbl_khoa')->get();
        $alllopsh = DB::table('tbl_lopsh')->get();
        $tg = DB::table('tbl_tongiao')->get();
        $dt = DB::table('tbl_dantoc')->get();
        $dcc = DB::table('tbl_diachicua')->get();
        $kv = DB::table('tbl_khuvuctuyensinh')->get();
        return view('admin.add_user',compact('allnganh','allkhoa','alllopsh','tg','dt','kv','dcc'));
       
    }
    public function edit_user()
    {
        return view('admin.edit_user');
    }
}
