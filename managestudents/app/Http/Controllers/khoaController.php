<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class khoaController extends Controller
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
    public function all_khoa(){
        $this->AuthLogin();
        $all_khoa = DB::table('tbl_khoa')->get();
        return view('admin.all_khoa',compact('all_khoa'));
    }
    public function edit_khoa($khoa_id){
        $this->AuthLogin();
        $edit_khoa = DB::table('tbl_khoa')->where('idkhoa',$khoa_id)->get();
        $manager_khoa = view('admin.edit_khoa')->with('edit_khoa',$edit_khoa);
        return view('layout_admin')->with('admin.edit_khoa', $manager_khoa);
    }
    public function delete_khoa($khoa_id){
        $this->AuthLogin();
        DB::table('tbl_khoa')->where('idkhoa',$khoa_id)->delete();
        Session::put('message','Khoa được xóa thành công !!!');
        return Redirect::to('/all-khoa');
    }
    public function add_khoa(){
        return view('admin.add_khoa');
    }
    public function save_khoa(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['tenkhoa'] = $request->tenkhoa;
        DB::table('tbl_khoa')->insert($data);
        Session::put('message','Thêm khoa thành công!!!');
        return Redirect::to('/all-khoa');
    }
    public function update_khoa(Request $request ,$khoa_id){
        $this->AuthLogin();
        $data = array();
        $data['tenkhoa'] = $request->tenkhoa;

        DB::table('tbl_khoa')->where('idkhoa',$khoa_id)->update($data);
        Session::put('message','Cập nhật khoa thành công!!!');
        return Redirect::to('/all-khoa');
    }

}
