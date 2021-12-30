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
    <li>
        <a href="{{URL::to('/all-lop')}}">
            <i class="nc-icon nc-badge"></i>
            <p>Quản lý Lớp</p>
        </a>
    </li>
</ul>
@endsection

@section('admin_content')
<div class="col-md-12">
    <div class="card card-user">
        <div class="card-header">
        <h5 class="card-title text-center">Chỉnh sửa thông tin</h5>
        </div>
        <div class="card-body ">
        <form  class="px-4" role="form" action="{{URL::to('/save-user')}}" method="POST" enctype="multipart/form-data">
            @csrf   
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            <div class="row  justify-content-center">
                <div class="col-3 d-flex align-items-center justify-content-center">
                  <div class="avatar-wrapper">
                  <input class="file-upload" type="file" name="anh" accept="img/*"/>
                    <img class="profile-pic" src="{{URL::to('uploads/user/')}}" />
                    <div class="upload-button">
                      <i class="fas fa-arrow-circle-up" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="col justify-content-end text-center">
                        <div class="form-group">
                        <label>Mã Sinh Viên</label>
                        <input type="text" class="form-control" name="idsv" placeholder="Mã Sinh Viên" value="">
                        </div>
                    </div>
                    <div class="col justify-content-end text-center">
                        <div class="form-group">
                        <label>Họ và Tên</label>
                        <input type="text" class="form-control" name="name" placeholder="Họ và tên" value="">
                        </div>
                    </div>
                    <div class="col justify-content-end text-center">
                        <div class="form-group">
                        <label>Giới Tính</label>
                        <select class="form-control form-control-sm"  name="gioitinh" name="gioitinh" aria-label="Default select example">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                            <option value="Khác">Khác</option>
                        </select> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col justify-content-center text-center">
                        <div class="form-group">
                        <label>Khoa</label>
                        <select class="form-control form-control-sm nganh" name="khoa" aria-label="Default select example">
                          <option selected>--Khoa--</option>
                            @foreach($allkhoa as $n)
                            <option value="{{$n->idkhoa}}">{{$n->tenkhoa}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col justify-content-center text-center">
                        <div class="form-group">
                        <label>--Ngành--</label>
                        <select class="form-control form-control-sm nganh" name="nganh" aria-label="Default select example">
                          <option selected>--Ngành--</option>
                            @foreach($allnganh as $n)
                            <option value="{{$n->idnganh}}">{{$n->tennganh}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col justify-content-center text-center">
                        <div class="form-group">
                        <label>Lớp</label>
                        <select class="form-control form-control-sm nganh" name="lop" aria-label="Default select example">
                          <option selected>--Lớp--</option>
                            @foreach($alllopsh as $n)
                            <option value="{{$n->idlop}}">{{$n->tenlop}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-1-5 align-self-end ">
                <label>Ngày sinh</label>
                </div>
                <div class="col-2  ">
                    <div class="row justify-content-center ">
                        <div class="col-10 text-center">
                        <label>Ngày</label>
                        </div>
                    </div>
                    <div class="row justify-content-center ">
                        <div class="col-10">
                            <select class="form-control form-control-sm" name="ds" aria-label="Default select example">
                            @for ($i = 1; $i < 32; $i++)
                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-2  ">
                    <div class="row justify-content-center ">
                        <div class="col-10 text-center">
                        <label>Tháng</label>
                        </div>
                    </div>
                    <div class="row justify-content-center ">
                        <div class="col-10">
                            <select class="form-control form-control-sm" name="ms" aria-label="Default select example">
                            @for ($i = 1; $i < 13; $i++)
                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-2  ">
                    <div class="row justify-content-center ">
                        <div class="col-10 text-center">
                        <label>Năm</label>
                        </div>
                    </div>
                    <div class="row justify-content-center ">
                        <div class="col-10">
                            <select class="form-control form-control-sm px-0" name="ys" aria-label="Default select example">
                            @for ($i = 2021; $i >= 1980; $i--)
                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            @endfor
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
      $(document).ready(function() {
	
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.profile-pic').attr('src', e.target.result);
                }
        
                reader.readAsDataURL(input.files[0]);
            }
        }
      
        $(".file-upload").on('change', function(){
            readURL(this);
        });
        
        $(".upload-button").on('click', function() {
          // console.log('ok');
          $(".file-upload").click();
          
        });
      });
    </script>
@endsection
