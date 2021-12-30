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
        $tg = DB::table('tbl_tongiao')->get();
        $dt = DB::table('tbl_dantoc')->get();
        $dcc = DB::table('tbl_diachicua')->get();
        $kv = DB::table('tbl_khuvuctuyensinh')->get();
        return view('page.infobox',compact('allnganh','allkhoa','alllopsh','info','tg','dt','kv','dcc'));
    }

    public function update_info(Request $request ,$id){
        $d = $request->ms."/".$request->ds."/".$request->ys;
        $d1 = $request->mc."/".$request->dc."/".$request->yc;
        $d2 = $request->mh."/".$request->dh."/".$request->yh;
        $data = array();
        $data['name'] = $request->name;
        $data['lop'] = $request->lop;
        $data['nganh'] = $request->nganh;
        $data['khoa'] = $request->khoa;
        $data['ngaysinh'] = $d;
        $data['gioitinh'] = $request->gioitinh;
        $data['tongiao'] = $request->tongiao;
        $data['dantoc'] = $request->dantoc;
        $data['cmnd'] = $request->cmnd;
        $data['ngaycap'] = $d1;
        $data['noicap'] = $request->noicap;
        $data['noisinh'] = $request->noisinh;
        $data['email'] = $request->email;
        $data['dienthoai'] = $request->dienthoai;
        $data['hokhau'] = $request->hokhau;
        $data['ladiachicua'] = $request->ladiachicua;
        $data['tinh'] = $request->tinh;
        $data['huyen'] = $request->huyen;
        $data['xa'] = $request->xa;
        $data['sobaohiem'] = $request->sobaohiem;
        $data['hieuluc'] = $d2;
        $data['nganhang'] = $request->nganhang;
        $data['stk'] = $request->stk;
        $data['khuvuc'] = $request->khuvuc;
        $data['doituong'] = $request->doituong;
        $get_image = $request->file('anh');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/user',$new_image);
            $data['anh'] = $new_image;
            DB::table('tbl_user')->where('id',$id)->update($data);
            Session::put('message','Cập nhật thông tin thành công!!!');
            return Redirect::to('/inputinfo');
        }
        DB::table('tbl_user')->where('id',$id)->update($data);
            Session::put('message','Cập nhật thông tin thành công!!!');
            return Redirect::to('/inputinfo');
    }
}
