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
</ul>
@endsection

@section('admin_content')
<div class="row">

    <div class="col-md-12">
<<<<<<< HEAD
    <div class="card card-user">
        <div class="card-header">
        <h5 class="card-title text-center">Thêm Sinh Viên</h5>
        </div>
        <div class="card-body ">
        <form>
            <div class="row  justify-content-center">
                <div class="col-md-4">
                    <div class="col justify-content-end text-center">
                        <div class="form-group">
                        <label>Mã Sinh Viên</label>
                        <input type="text" class="form-control" placeholder="Họ và tên" value="">
                        </div>
                    </div>
                    <div class="col justify-content-end text-center">
                        <div class="form-group">
                        <label>Họ và Tên</label>
                        <input type="text" class="form-control" placeholder="Họ và tên" value="">
                        </div>
                    </div>
                    <div class="col justify-content-end text-center">
                        <div class="form-group">
                        <label>Giới Tính</label>
                        <select class="form-control form-control-sm" name="gioitinh" aria-label="Default select example">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                            <option value="Khác">Khác</option>
                        </select> </div>
                    </div>
                </div>

                <div class="col-md-4">
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
                        <label>Khoa</label>
                        <select class="form-control form-control-sm nganh" name="nganh" aria-label="Default select example">
                          <option selected>--Khoa--</option>
                            @foreach($allkhoa as $n)
                            <option value="{{$n->idkhoa}}">{{$n->tenkhoa}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col justify-content-center text-center">
                        <div class="form-group">
                        <label>Lớp</label>
                        <select class="form-control form-control-sm nganh" name="nganh" aria-label="Default select example">
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

            <div class="col justify-content-center text-center">
                        <div class="form-group">
                        <label>Ngày sinh</label>
                        <div class="col-sm-8 d-flex align-items-center">
                        <span class="mx-1">Ngày:</span>

                        <select class="form-control form-control-sm" name="ds" aria-label="Default select example">
                        @for ($i = 1; $i < 32; $i++)

                          <option value="<?php echo $i ?>"><?php echo $i ?></option>

                        @endfor
                        </select>
                        <span class="mx-1">Tháng:</span>
                        <select class="form-control form-control-sm" name="ms" aria-label="Default select example">
                        @for ($i = 1; $i < 13; $i++)

                          <option value="<?php echo $i ?>"><?php echo $i ?></option>

                        @endfor
                        </select>
                        <span class="mx-1">Năm:</span>
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
=======
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title text-center">Thêm Sinh Viên</h5>
            </div>
            <div class="card-body ">
                <form>
                    <div class="row  justify-content-center">
                        <div class="col-md-4">
                            <div class="col justify-content-end text-center">
                                <div class="form-group">
                                    <label>Họ và tên</label>
                                    <input type="text" class="form-control" placeholder="Họ và tên" value="">
                                </div>
                            </div>
                            <div class="col justify-content-end text-center">
                                <div class="form-group">
                                    <label>Họ và tên</label>
                                    <input type="text" class="form-control" placeholder="Họ và tên" value="">
                                </div>
                            </div>
                            <div class="col justify-content-end text-center">
                                <div class="form-group">
                                    <label>Họ và tên</label>
                                    <input type="text" class="form-control" placeholder="Họ và tên" value="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col justify-content-center text-center">
                                <div class="form-group">
                                    <label>Mã sinh viên</label>
                                    <input type="text" class="form-control" placeholder="Mã sinh viên" value="">
                                </div>
                            </div>
                            <div class="col justify-content-center text-center">
                                <div class="form-group">
                                    <label>Mã sinh viên</label>
                                    <input type="text" class="form-control" placeholder="Mã sinh viên" value="">
                                </div>
                            </div>
                            <div class="col justify-content-center text-center">
                                <div class="form-group">
                                    <label>Mã sinh viên</label>
                                    <input type="text" class="form-control" placeholder="Mã sinh viên" value="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                        </div>
                    </div>
                </form>
>>>>>>> c63e0a34c5ac0bb965f69ebda5cf4572b06850da
            </div>
        </div>
    </div>
</div>
<script>
<<<<<<< HEAD
      $(document).ready(function() {
=======
    $(document).ready(function() {
>>>>>>> c63e0a34c5ac0bb965f69ebda5cf4572b06850da

        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

<<<<<<< HEAD
        $(".file-upload").on('change', function(){
=======
        $(".file-upload").on('change', function() {
>>>>>>> c63e0a34c5ac0bb965f69ebda5cf4572b06850da
            readURL(this);
        });

        $(".upload-button").on('click', function() {
<<<<<<< HEAD
          console.log('ok');
          $(".file-upload").click();
=======
            console.log('ok');
            $(".file-upload").click();
>>>>>>> c63e0a34c5ac0bb965f69ebda5cf4572b06850da

        });
    });
</script>

@endsection