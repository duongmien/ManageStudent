<?php
use Illuminate\Support\Facades\Session;
$message = Session::get('message');
if($message){

echo '<script>alert("'.$message.'");</script> ';
    Session::put('message',null);
}
?>
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
            <i class="nc-icon nc-single-02"></i>
            <p>Quản lý sinh viên</p>
        </a>
    </li>
    <li class="active ">
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
    <li>
        <a href="{{URL::to('/all-lop')}}">
            <i class="nc-icon nc-badge"></i>
            <p>Quản lý Lớp</p>
        </a>
    </li>
</ul>
@endsection
@section('admin_content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Thêm khoa</h4>
                </div>
                <div class="card-body">
                    <form action="{{URL::to('/save-khoa')}}" method="POST">
                    @csrf   
                        <input type="hidden" name="token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tên Khoa</label>
                            <input type="text" class="form-control" name="tenkhoa" id="tenkhoa" placeholder="Nhập khoa cần thêm...">
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div> -->
                        <div>
                            <button type="submit" class="btn btn-primary btn-round">OK</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection