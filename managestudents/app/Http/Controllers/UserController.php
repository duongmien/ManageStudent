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
    public function save_user(Request $request)
    {
        $d = $request->ms."/".$request->ds."/".$request->ys;
        $data = array();
        $data['idsv'] = $request->idsv;
        $data['idrole'] = 2;
        $data['password'] = 12345;
        $data['name'] = $request->name;
        $data['lop'] = $request->lop;
        $data['nganh'] = $request->nganh;
        $data['khoa'] = $request->khoa;
        $data['ngaysinh'] = $d;
        $data['gioitinh'] = $request->gioitinh;
        DB::table('tbl_user')->insert($data);
        Session::put('message','Cập nhật thông tin thành công!!!');
        return Redirect::to('all-user');
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
