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
        // $this->AuthLogin();
        $all_khoa = DB::table('tbl_khoa')->get();
        return view('admin.all_khoa',compact('all_khoa'));
    }

}
