<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class NganhController extends Controller
{
    public function all_nganh(){
        // $this->AuthLogin();
        $all_nganh = DB::table('tbl_nganh')->join('tbl_khoa','tbl_khoa.idkhoa','=','tbl_nganh.idkhoa')->orderBy('tbl_nganh.idkhoa','desc')->get();
        return view('admin.all_nganh',compact('all_nganh'));
    }
    // public function edit_khoa($khoa_id){
    //     // $this->AuthLogin();
    //     $edit_khoa = DB::table('tbl_khoa')->where('idkhoa',$khoa_id)->get();
    //     $manager_khoa = view('admin.edit_khoa')->with('edit_khoa',$edit_khoa);
    //     return view('admin.edit_khoa', $manager_khoa);
    // }
    // public function delete_khoa($khoa_id){
    //     // $this->AuthLogin();
    //     DB::table('tbl_khoa')->where('idkhoa',$khoa_id)->delete();
    //     Session::put('message','Xóa danh mục sản phẩm thành công!!!');
    //     return Redirect::to('/all-khoa');
    // }

}
