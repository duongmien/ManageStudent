<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class NganhController extends Controller
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
    public function all_nganh(){
        $this->AuthLogin();
        $all_nganh = DB::table('tbl_nganh')->join('tbl_khoa','tbl_khoa.idkhoa','=','tbl_nganh.idkhoa')->orderBy('tbl_nganh.idkhoa','desc')->get();
        return view('admin.all_nganh',compact('all_nganh'));
    }
    public function edit_nganh($nganh_id){
        $this->AuthLogin();
        $all_khoa = DB::table('tbl_khoa')->get();
        $edit_nganh = DB::table('tbl_nganh')->where('idnganh',$nganh_id)->get();
        $manager_nganh = view('admin.edit_nganh')->with('edit_nganh',$edit_nganh)->with('all_khoa',$all_khoa);
        return view('layout_admin')->with('admin.edit_nganh', $manager_nganh);
    }
    public function add_nganh(){
        $this->AuthLogin();
        $all_khoa = DB::table('tbl_khoa')->get();
        return view('admin.add_nganh')->with('all_khoa', $all_khoa);;
    }
    public function save_nganh(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['tennganh'] = $request->tennganh;
        $data['idkhoa'] = $request->idkhoa;
        DB::table('tbl_nganh')->insert($data);
        Session::put('message','Thêm ngành thành công!!!');
        return Redirect::to('/all-nganh');
    }
    public function delete_nganh($nganh_id){
        $this->AuthLogin();
        DB::table('tbl_nganh')->where('idnganh',$nganh_id)->delete();
        Session::put('message','Ngành được xóa thành công!!!');
        return Redirect::to('/all-nganh');
    }
    public function update_nganh(Request $request ,$nganh_id){
        $this->AuthLogin();
        $data = array();
        $data['tennganh'] = $request->tennganh;
        $data['idkhoa'] = $request->idkhoa;

        DB::table('tbl_nganh')->where('idnganh',$nganh_id)->update($data);
        Session::put('message','Cập nhật ngành thành công!!!');
        return Redirect::to('/all-nganh');
    }

}
