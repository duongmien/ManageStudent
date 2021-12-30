<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class khoaController extends Controller
{
    public function all_khoa(){
        // $this->AuthLogin();
        $all_khoa = DB::table('tbl_khoa')->get();
        return view('admin.all_khoa',compact('all_khoa'));
    }
    public function edit_khoa($khoa_id){
        // $this->AuthLogin();
        $edit_khoa = DB::table('tbl_khoa')->where('idkhoa',$khoa_id)->get();
        $manager_khoa = view('admin.edit_khoa')->with('edit_khoa',$edit_khoa);
        return view('admin.edit_khoa', $manager_khoa);
    }
    public function delete_khoa($khoa_id){
        // $this->AuthLogin();
        DB::table('tbl_khoa')->where('idkhoa',$khoa_id)->delete();
        Session::put('message','Khoa được xóa thành công !!!');
        return Redirect::to('/all-khoa');
    }

}
