@extends('layout_admin')
@section('left-nav')
<ul class="nav">
    <li>
    <a href="{{URL::to('/dashboard')}}">
        <i class="nc-icon nc-bank"></i>
        <p>Dashboard</p>
    </a>
    </li>
    <li>
    <a href="{{URL::to('/all-user')}}">
        <i class="nc-icon nc-diamond"></i>
        <p>Quản lý sinh viên</p>
    </a>
    </li>
    <li class="active ">
    <a href="{{URL::to('/all-khoa')}}">
        <i class="nc-icon nc-tile-56"></i>
        <p>Quản lý Khoa</p>
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
                <button type="submit" class="btn btn-primary btn-round">Thêm Khoa</button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
            <thead class=" text-primary">
                <th class="text-center">STT</th>
                <th class="text-center">Tên khoa</th>
            </thead>
            <tbody>
                <tr>
                <td class="text-center">1</td>
                <td class="text-center">Khoa Điện</td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection

