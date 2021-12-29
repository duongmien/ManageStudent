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
        </div>
    </div>
    </div>
</div>
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
          console.log('ok');
          $(".file-upload").click();
          
        });
    });
    </script>

@endsection