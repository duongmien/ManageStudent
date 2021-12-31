<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class LopController extends Controller
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
    public function all_lop(){
        $this->AuthLogin();
        $all_lop = DB::table('tbl_lopsh')->join('tbl_nganh','tbl_lopsh.idnganh','=','tbl_nganh.idnganh')->orderBy('tbl_nganh.idnganh','desc')->get();
        return view('admin.all_lop',compact('all_lop'));
    }
    public function edit_lop($lop_id){
        $this->AuthLogin();
        $all_nganh = DB::table('tbl_nganh')->get();
        $edit_lop = DB::table('tbl_lopsh')->where('idlop',$lop_id)->get();
        $manager_lop = view('admin.edit_lop')->with('edit_lop',$edit_lop)->with('all_nganh',$all_nganh);
        return view('layout_admin')->with('admin.edit_lop', $manager_lop);
    }
    public function add_lop(){
        $this->AuthLogin();
        $all_nganh = DB::table('tbl_nganh')->get();
        return view('admin.add_lop')->with('all_nganh', $all_nganh);;
    }
    public function save_lop(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['tenlop'] = $request->tenlop;
        $data['idnganh'] = $request->idnganh;
        DB::table('tbl_lopsh')->insert($data);
        Session::put('message','Thêm lớp thành công!!!');
        return Redirect::to('/all-lop');
    }
    public function delete_lop($lop_id){
        $this->AuthLogin();
        DB::table('tbl_lopsh')->where('idlop',$lop_id)->delete();
        Session::put('message','Lớp được xóa thành công!!!');
        return Redirect::to('/all-lop');
    }
    public function update_lop(Request $request ,$lop_id){
        $this->AuthLogin();
        $data = array();
        $data['tenlop'] = $request->tenlop;
        $data['idnganh'] = $request->idnganh;

        DB::table('tbl_lopsh')->where('idlop',$lop_id)->update($data);
        Session::put('message','Cập nhật lớp thành công!!!');
        return Redirect::to('/all-lop');
    }

}
