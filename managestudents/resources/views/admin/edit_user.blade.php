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
            
        @foreach($info as $key => $in)
        <form  class="px-4" role="form" action="{{URL::to('/update-user/'.$in->id)}}" method="POST" enctype="multipart/form-data">
            @csrf   
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            <?php 
                          $time = strtotime($in->hieuluc);
                          $d = date('d',$time);
                          $m = date('m',$time);
                          $y = date('y',$time)+2000;
                          $time1 = strtotime($in->ngaycap);
                          $d1 = date('d',$time1);
                          $m1 = date('m',$time1);
                          $y1 = date('y',$time1)+2000;
                          $time2 = strtotime($in->ngaysinh);
                          $d2 = date('d',$time2);
                          $m2 = date('m',$time2);
                          $y2 = date('y',$time2)+2000;
                          ?>
            <div class="row  justify-content-center">
                <div class="col-3 d-flex align-items-center justify-content-center">
                  <div class="avatar-wrapper">
                  <img class="profile-pic" src="{{URL::to('uploads/user/'.$in->anh)}}" />
<div class="upload-button">
                      <i class="fas fa-arrow-circle-up" aria-hidden="true"></i>
                    </div>
                  <input class="file-upload" type="file" name="anh" accept="img/*"/>

                  </div>
                </div>
                <div class="col-md-4">
                    <div class="col justify-content-end text-center">
                        <div class="form-group">
                        <label>Mã Sinh Viên</label>
                        <input type="text" value="{{$in->idsv}}" readonly class="form-control" name="idsv" placeholder="Mã Sinh Viên" value="">
                        </div>
                    </div>
                    <div class="col justify-content-end text-center">
                        <div class="form-group">
                        <label>Họ và Tên</label>
                        <input   value="{{$in->name}}" name="name" class="form-control form-control-sm" id="inputEmail1">
</div>
                    </div>
                    <div class="col justify-content-end text-center">
                        <div class="form-group">
                        <label>Giới Tính</label>
                        <select class="form-control form-control-sm"  name="gioitinh" name="gioitinh" aria-label="Default select example">
                        @if($in->gioitinh=="Nam")
                          <option value="Nam" selected>Nam</option>
                          @else
                          <option value="Nam">Nam</option>
                          @endif
                          @if($in->gioitinh=="Nữ")
                          <option value="Nữ" selected>Nữ</option>
                          @else
                          <option value="Nữ">Nữ</option>
                          @endif
                          @if($in->gioitinh=="Khác")
                          <option value="Khác" selected>Khác</option>
                          @else
                          <<option value="Khác">Khác</option>
                          @endif
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
                            @if($in->khoa==$n->idkhoa)
                            <option selected value="{{$n->idkhoa}}">{{$n->tenkhoa}}</option>
                            @else
                            <option value="{{$n->idkhoa}}">{{$n->tenkhoa}}</option>
                            @endif
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
                            @if($in->nganh==$n->idnganh)
                            <option selected value="{{$n->idnganh}}">{{$n->tennganh}}</option>
                            @else
                            <option value="{{$n->idnganh}}">{{$n->tennganh}}</option>
                            @endif
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
                            @if($in->lop==$n->idlop)
                            <option selected value="{{$n->idlop}}">{{$n->tenlop}}</option>
                            @else
                            <option value="{{$n->idlop}}">{{$n->tenlop}}</option>
                            @endif
                          @endforeach
                        </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end ">
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
                            @if($d2==$i)
                          <option selected value="<?php echo $i?>"><?php echo $i?></option>
                          @else
                          <option value="<?php echo $i?>"><?php echo $i?></option>
                          @endif
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
                          @if($m2==$i)
                          <option selected value="<?php echo $i?>"><?php echo $i?></option>
                          @else
                          <option value="<?php echo $i?>"><?php echo $i?></option>
                          @endif
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
                          @if($y2==$i)
                          <option selected value="<?php echo $i?>"><?php echo $i?></option>
                          @else
                          <option value="<?php echo $i?>"><?php echo $i?></option>
                          @endif
                        @endfor
                       </select>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row ">
                  <div class="col mt-3">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Nơi sinh (Tỉnh/Tp) (*):</label>
                      <div class="row-sm-8">
                        <input  value="{{$in->noisinh}}" name="noisinh"class="form-control form-control-sm" id="inputEmail1">
                      
                    </div>
                  </div>
                  <div class="col mt-3">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Email(*):</label>
                      <div class="row-sm-8">
                        <input  value="{{$in->email}}" name="email" class="form-control form-control-sm" id="inputEmail1">
                      
                    </div>
                  </div>
                  <div class="col mt-3">
                    
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Điện thoại(*):</label>
                      <div class="row-sm-8">
                        <input  value="{{$in->dienthoai}}" name="dienthoai" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                  </div>
                </div>
                <div class="row mb-3 mt-3">
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Tôn giáo(*):</label>
                      <div class="row-sm-8">
                        <select class="form-control form-control-sm"name="tongiao" aria-label="Default select example">
                          <option>--Tôn giáo</option>
                          @foreach($tg as $t)
                            @if($in->tongiao==$t->tentg)
                            <option selected value="{{$t->tentg}}">{{$t->tentg}}</option>
                            @else
                            <option value="{{$t->tentg}}">{{$t->tentg}}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Dân tộc:</label>
                      <div class="row-sm-8">
                        <select class="form-control form-control-sm" name="dantoc" aria-label="Default select example">
                          <option>--Dân tộc</option>
                          @foreach($dt as $t)
                            @if($in->dantoc==$t->tendt)
                            <option selected value="{{$t->tendt}}">{{$t->tendt}}</option>
                            @else
                            <option value="{{$t->tendt}}">{{$t->tendt}}</option>
                            @endif
                          @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Quốc tịch:</label>
                      <div class="row-sm-8">
                        <select class="form-control form-control-sm" aria-label="Default select example">
                          <option selected>Việt Nam</option>
                        </select>
                      </div>
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Số CMND/CCCD(*):</label>
                      <div class="row-sm-8">
                        <input  value="{{$in->cmnd}}" name="cmnd" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Ngày cấp(*):</label>
                      <div class="row-sm-8 d-flex align-items-center">
                      <select class="form-control-1 form-control-sm" name="dc" aria-label="Default select example">
                        
                        @for ($i = 1; $i < 32; $i++)
                          @if($d1==$i)
                          <option selected value="<?php echo $i?>"><?php echo $i?></option>
                          @else
                          <option value="<?php echo $i?>"><?php echo $i?></option>
                          @endif
                        @endfor
                        </select>
                        <span class="mx-1">Tháng:</span>
                        <select class="form-control-1 form-control-sm"name="mc" aria-label="Default select example">
                        @for ($i = 1; $i < 13; $i++)
                          @if($m1==$i)
                          <option selected value="<?php echo $i?>"><?php echo $i?></option>
                          @else
                          <option value="<?php echo $i?>"><?php echo $i?></option>
                          @endif
                        @endfor
                        </select>
                        <span class="mx-1">Năm:</span>
                        <select class="form-control form-control-sm px-0" name="yc"aria-label="Default select example">
                        @for ($i = 2021; $i >= 1980; $i--)
                         @if($y1==$i)
                          <option selected value="<?php echo $i?>"><?php echo $i?></option>
                          @else
                          <option value="<?php echo $i?>"><?php echo $i?></option>
                          @endif
                        @endfor
                        </select>
                      </div>
                  </div>
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Nơi cấp(*):</label>
                      <div class="row-sm-8">
                        <input  value="{{$in->noicap}}" name="noicap" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Nơi sinh (Tỉnh/Tp) (*):</label>
                      <div class="row-sm-8">
                        <input  value="{{$in->noisinh}}" name="noisinh"class="form-control form-control-sm" id="inputEmail1">
                      </div>
                  </div>
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Email(*):</label>
                      <div class="row-sm-8">
                        <input  value="{{$in->email}}" name="email" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                  </div>
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Điện thoại(*):</label>
                      <div class="row-sm-8">
                        <input  value="{{$in->dienthoai}}" name="dienthoai" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Hộ khẩu thường trú(*):</label>
                      <div class="row-sm-8">
                        <input  value="{{$in->hokhau}}" name="hokhau" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Là địa chỉ của (*):</label>
                      <div class="row-sm-8">
                        <select class="form-control form-control-sm" name="ladiachicua" aria-label="Default select example">
                          <option >Chọn</option>
                          @foreach($dcc as $dcc)
                            @if($in->ladiachicua==$dcc->tendcc)
                            <option selected value="{{$dcc->tendcc}}">{{$dcc->tendcc}}</option>
                            @else
                            <option  value="{{$dcc->tendcc}}">{{$dcc->tendcc}}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="col"></div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Tỉnh/Thành Phố(*):</label>
                      <div class="row-sm-8">
                        <select class="form-control form-control-sm" name="tinh" aria-label="Default select example" id="provinve-city">
                          <!-- <option selected>Open</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option> -->
                        </select>
                      </div>
                  </div>
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Quận/Huyện(*):</label>
                      <div class="row-sm-8">
                        <select class="form-control form-control-sm" name="huyen" aria-label="Default select example" id="district">
                        <option value="0">--Chọn quận, huyện</option>
                        </select>
                      </div>
                  </div>
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Xã/Phường(*):</label>
                      <div class="row-sm-8">
                        <select class="form-control form-control-sm" name="xa" aria-label="Default select example" id="ward">
                        <option value="0">--Chọn phường, xã</option>
                        </select>
                      </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Số bảo hiểm(*):</label>
                      <div class="row-sm-8">
                        <input  value="{{$in->sobaohiem}}" name="sobaohiem" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                  </div>
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Hiệu lực bảo hiểm(*):</label>
                      <div class="row-sm-8 d-flex align-items-center">
                      <select class="form-control form-control-sm"name="dh" aria-label="Default select example">
                        
                        @for ($i = 1; $i < 32; $i++)
                          @if($d==$i)
                          <option selected value="<?php echo $i?>"><?php echo $i?></option>
                          @else
                          <option value="<?php echo $i?>"><?php echo $i?></option>
                          @endif
                        @endfor
                        </select>
                        <span class="mx-1">Tháng:</span>
                        <select class="form-control form-control-sm"name="mh" aria-label="Default select example">
                        @for ($i = 1; $i < 13; $i++)
                          @if($m==$i)
                          <option selected value="<?php echo $i?>"><?php echo $i?></option>
                          @else
                          <option value="<?php echo $i?>"><?php echo $i?></option>
                          @endif
                        @endfor
                        </select>
                        <span class="mx-1">Năm:</span>
                        <select class="form-control form-control-sm px-0" name="yh"aria-label="Default select example">
                        @for ($i = 2021; $i >= 1980; $i--)
                         @if($y==$i)
                          <option selected value="<?php echo $i?>"><?php echo $i?></option>
                          @else
                          <option value="<?php echo $i?>"><?php echo $i?></option>
                          @endif
                        @endfor
                        </select>
                      </div>
                  </div>
                  
                </div>
                
                <div class="row mb-3">
                    <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Tài khoản ngân hàng:</label>
                      <div class="row-sm-8">
                        <select class="form-control form-control-sm" name="nganhang"aria-label="Default select example">
                          <option selected>Chọn</option>
                            @if($in->nganhang=="VietTinBank")
                            <option selected value="VietTinBank">VietTinBank</option>
                            @else
                            <option value="VietTinBank">VietTinBank</option>
                            @endif
                        </select>
                    </div>
                  </div>
                  <div class="col">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Số tài khoản:</label>
                      <div class="col-sm-8">
                        <input  value="{{$in->stk}}"name="stk" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                  </div>

                <div class="row mb-3">
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Khu vực tuyển sinh(*):</label>
                      <div class="row-sm-8">
                        <select class="form-control form-control-sm" name="khuvuc"aria-label="Default select example">
                          <option>--Chọn khu vực</option>
                          @foreach($kv as $k)
                            @if($in->khuvuc==$k->tenkv)
                            <option selected value="{{$k->tenkv}}">{{$k->tenkv}}</option>
                            @else
                            <option value="{{$k->tenkv}}">{{$k->tenkv}}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="col">
                      <label for="inputEmail1" class="row-sm-4 col-form-label">Đối tượng tuyển sinh(*):</label>
                      <div class="row-sm-8">
                        <input  class="form-control form-control-sm" value="{{$in->doituong}}" name="doituong" id="inputEmail1">
                      </div>
                  </div>
                  <div class="col"></div>
                </div>
            <div class="row justify-content-end">
                <div class="">
                    <button type="submit" class="btn btn-primary btn-round">Cập nhật</button>
                </div>
            </div>
          </form>
          @endforeach
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
        $.get("https://provinces.open-api.vn/api/?depth=2", function(data){
          let listSelect = []
          listSelect.push(`<option value="0" selected>--Chọn tỉnh, thành phố</option>`)
          var nametinh = "<?php foreach($info as $key => $in) echo $in->tinh ?>"
          for (let index = 0; index < data.length; index++) {
            if(data[index].code==nametinh){
              let newSelect = `<option selected value="${data[index].code}">${data[index].name}</option>`
              listSelect.push(newSelect)
            }else{
              let newSelect = `<option value="${data[index].code}">${data[index].name}</option>`
              listSelect.push(newSelect)
            }
          }
          $('#provinve-city').html(listSelect)
        });
        $('#provinve-city').on('change', function() {
          console.log($(this).val());
          let provinceCode = $(this).val();
          $.get(`https://provinces.open-api.vn/api/p/${provinceCode}?depth=2`, function(data){
            let listSelect = []
            let district = data.districts
            listSelect.push(`<option value="0">--Chọn quận, huyện</option>`)
            var namehuyen = "<?php foreach($info as $key => $in) echo $in->huyen ?>"
            for (let index = 0; index < district.length; index++) {
              if(district[index].code==namehuyen){
                let newSelect = `<option selected value="${district[index].code}">${district[index].name}</option>`
                listSelect.push(newSelect)
            }else{
              let newSelect = `<option value="${district[index].code}">${district[index].name}</option>`
                listSelect.push(newSelect)
            }
            }
            $('#district').html(listSelect)
          });
        })
        $('#district').on('change', function() {
          console.log($(this).val());
          let districtCode = $(this).val();
          $.get(`https://provinces.open-api.vn/api/d/${districtCode}?depth=2`, function(data){
            let listSelect = []
            let ward = data.wards
            for (let index = 0; index < ward.length; index++) {
              let newSelect = `<option value="${ward[index].code}">${ward[index].name}</option>`
              listSelect.push(newSelect)
            }
            $('#ward').html(listSelect)
          });
        })
      });
    </script>
@endsection
