@extends('layout_admin')
@section('left-nav')
<ul class="nav">
    <li>
        <a href="{{URL::to('/dashboard')}}">
            <i class="nc-icon nc-bank"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="active ">
        <a href="{{URL::to('/all-user')}}">
            <i class="nc-icon nc-diamond"></i>
            <p>Quản lý sinh viên</p>
        </a>
    </li>
    <li>
        <a href="{{URL::to('/all-khoa')}}">
            <i class="nc-icon nc-tile-56"></i>
            <p>Quản lý Khoa</p>
        </a>
    </li>
    <li>
        <a href="{{URL::to('/all-nganh')}}">
            <i class="nc-icon nc-istanbul"></i>
            <p>Quản lý Ngành</p>
        </a>
    </li>
</ul>
@endsection

@section('admin_content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="update ml-4 mr-2">
                        <button type="submit" class="btn btn-primary btn-round">Thêm Sinh Viên</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th class="text-center">STT</th>
                            <th class="text-center">Mã Sinh Viên</th>
                            <th class="text-center">Họ và tên</th>
                            <th class="text-center" class="text-center">Lớp</th>
                            <th class="text-center">Ảnh</th>
                            <th class="text-center">Cập nhật</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">1911505310146</td>
                                <td class="text-center">Nguyễn Hồng Sơn</td>
                                <td class="text-center">19T1</td>
                                <td class="text-center"><img src="uploads/user/342.jpg" height="80" width="80" /></td>
                                <td class="text-center">
                                    <a href="" class="active styling-edit" ui-toggle-class="">
                                        <i class="nc-icon nc-ruler-pencil"></i>
                                    </a>
                                    <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="" class="active styling-edit" ui-toggle-class="">
                                        <i class="nc-icon nc-simple-remove"></i>
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection