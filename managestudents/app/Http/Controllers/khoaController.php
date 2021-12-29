<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class khoaController extends Controller
{
    public function findNganh(Request $request){
        return;
    }
    public function viewall_khoa(){
        return view('admin.all_khoa');
    }

    public function all_khoa(){
        $this->AuthLogin();
        $all_khoa = DB::table('tbl_khoa')->get();
        $manager_khoa = view('admin.all_khoa')->with('all_khoa',$all_khoa);
        return view('admin_layout')->with('admin.all_khoa', $manager_khoa);
    }

}
