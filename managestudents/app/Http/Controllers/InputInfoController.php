<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class InputInfoController extends Controller
{
    public function index()
    {
        $id = Session::get('id');
        $allnganh = DB::table('tbl_nganh')->get();
        $allkhoa = DB::table('tbl_khoa')->get();
        $alllopsh = DB::table('tbl_lopsh')->get();
        $info = DB::table('tbl_user')->where('id',$id)->get();
        return view('page.infobox',compact('allnganh','allkhoa','alllopsh','info'));
    }
}
