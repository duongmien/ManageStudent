<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    
    public function all_user()
    {
        $alluser = DB::table('tbl_user')->get();
        return view('admin.all_user',compact('alluser'));
    }
    public function add_user()
    {
        $id = Session::get('id');
        $allnganh = DB::table('tbl_nganh')->get();
        $allkhoa = DB::table('tbl_khoa')->get();
        $alllopsh = DB::table('tbl_lopsh')->get();
        return view('admin.add_user',compact('allnganh','allkhoa','alllopsh'));
       
    }
    public function edit_user()
    {
        return view('admin.edit_user');
    }
    public function delete_user()
    {
        return view('admin.edit_user');
    }
}
