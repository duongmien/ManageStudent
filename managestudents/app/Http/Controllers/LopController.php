<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class LopController extends Controller
{
    public function all_lop(){
        // $this->AuthLogin();
        $all_lop = DB::table('tbl_lopsh')->join('tbl_nganh','tbl_lopsh.idnganh','=','tbl_nganh.idnganh')->orderBy('tbl_nganh.idnganh','desc')->get();
        return view('admin.all_lop',compact('all_lop'));
    }
    // public function edit_khoa($khoa_id){
    //     // $this->AuthLogin();
    //     $edit_khoa = DB::table('tbl_khoa')->where('idkhoa',$khoa_id)->get();
    //     $manager_khoa = view('admin.edit_khoa')->with('edit_khoa',$edit_khoa);
    //     return view('admin.edit_khoa', $manager_khoa);
    // }
    // public function delete_nganh($nganh_id){
    //     // $this->AuthLogin();
    //     DB::table('tbl_nganh')->where('idnganh',$nganh_id)->delete();
    //     Session::put('message','Ngành được xóa thành công!!!');
    //     return Redirect::to('/all-nganh');
    // }

}
