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
    <li class="active ">
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
                    <h4 class="card-title">Sửa lớp</h4>
                </div>
                <div class="card-body">
                    @foreach($edit_lop as $key => $edit_value)
                    <form action="{{URL::to('/update-lop/'.$edit_value->idlop)}}" method="POST">
                    @csrf   
                        <input type="hidden" name="token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Ngành</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="idnganh">
                            @foreach($all_nganh as $key => $value)
                                @if($value->idnganh==$edit_value->idnganh)
                                <option selected value="{{ $value->idnganh }}">{{$value->tennganh}}</option>
                                @else
                                <option value="{{ $value->idnganh }}">{{$value->tennganh}}</option>
                                @endif
                            @endforeach 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tenlop">Tên Lớp</label>
                            <input type="text" class="form-control" name="tenlop" id="tenlop" value="{{ $edit_value->tenlop }}" placeholder="Nhập lớp cần thêm...">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-round">OK</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection