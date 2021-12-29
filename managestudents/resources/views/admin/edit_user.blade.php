@extends('layout_admin')
@section('left-nav')
<main class="my-infobox">
       @foreach($info as $key => $in)
      <form  class="px-4" role="form" action="{{URL::to('/update-info/'.$in->id)}}" method="POST" enctype="multipart/form-data">
        @csrf   
        <input type="hidden" name="token" value="{{ csrf_token() }}">
        <div class="container-fluid bg-white">
          <div class="row mx-3">
            <div class="col">
              <h2>Thông tin cá nhân</h2>
            </div>
          </div>
          <div class="row content-container mt-3 mx-3">
            <div class="col">
              <div class="container-fuild pt-3 position-relative">
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
                <span class="subtitle position-absolute">Thông tin chung</span>
                <div class="row">
                  <div class="col-3 d-flex align-items-center justify-content-center">
                    <div class="avatar-wrapper">
                      <img class="profile-pic" src="{{URL::to('uploads/user/'.$in->anh)}}" />
                      <div class="upload-button">
                        <i class="fas fa-arrow-circle-up" aria-hidden="true"></i>
                      </div>
                      <input class="file-upload" type="file" name="anh" accept="img/*"/>
                    </div>
                  </div>
                  <!-- sinhvien -->
                  <div class="col-5">
                    <div class="row mb-3">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Họ và tên:</label>
                      <div class="col-sm-8">
                        <input   value="{{$in->name}}" name="name" readonly="readonly"class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail2" class="col-sm-4 col-form-label">Chương trình đào tạo:</label>
                      <div class="col-sm-8">
                        <input  readonly="readonly"   class="form-control form-control-sm" id="inputEmail2">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-4 col-form-label">Ngành:</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm nganh" disabled name="nganh" aria-label="Default select example">
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
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-4 col-form-label">Sinh ngày:</label>
                      <div class="col-sm-8 d-flex align-items-center">
                        <select class="form-control form-control-sm"disabled name="ds" aria-label="Default select example">
                        @for ($i = 1; $i < 32; $i++)
                          @if($d2==$i)
                          <option selected value="<?php echo $i?>"><?php echo $i?></option>
                          @else
                          <option value="<?php echo $i?>"><?php echo $i?></option>
                          @endif
                        @endfor
                        </select>
                        <span class="mx-1">Tháng:</span>
                        <select class="form-control form-control-sm"disabled name="ms" aria-label="Default select example">
                        @for ($i = 1; $i < 13; $i++)
                          @if($m2==$i)
                          <option selected value="<?php echo $i?>"><?php echo $i?></option>
                          @else
                          <option value="<?php echo $i?>"><?php echo $i?></option>
                          @endif
                        @endfor
                        </select>
                        <span class="mx-1">Năm:</span>
                        <select class="form-control form-control-sm px-0"disabled name="ys" aria-label="Default select example">
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
                  <div class="col-4">
                    <div class="row mb-3">
                      <label for="inputEmail1"  class="col-sm-4 col-form-label">Lớp:</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm lop"disabled name="lop" aria-label="Default select example">
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
                    <div class="row mb-3">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Khoa:</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm lop"disabled name="khoa" aria-label="Default select example">
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
                    <div class="row mb-3">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Chuyên ngành:</label>
                      <div class="col-sm-8">
                        <input  class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-4 col-form-label">Giới tính:</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm"disabled name="gioitinh" aria-label="Default select example">
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
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- admin -->
                <!-- <div class="col-5">
                    <div class="row mb-3">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Họ và tên:</label>
                      <div class="col-sm-8">
                        <input   value="{{$in->name}}" name="name" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail2" class="col-sm-4 col-form-label">Chương trình đào tạo:</label>
                      <div class="col-sm-8">
                        <input     class="form-control form-control-sm" id="inputEmail2">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-4 col-form-label">Ngành:</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm nganh"  name="nganh" aria-label="Default select example">
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
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-4 col-form-label">Sinh ngày:</label>
                      <div class="col-sm-8 d-flex align-items-center">
                        <select class="form-control form-control-sm" name="ds" aria-label="Default select example">
                        @for ($i = 1; $i < 32; $i++)
                          @if($d2==$i)
                          <option selected value="<?php echo $i?>"><?php echo $i?></option>
                          @else
                          <option value="<?php echo $i?>"><?php echo $i?></option>
                          @endif
                        @endfor
                        </select>
                        <span class="mx-1">Tháng:</span>
                        <select class="form-control form-control-sm" name="ms" aria-label="Default select example">
                        @for ($i = 1; $i < 13; $i++)
                          @if($m2==$i)
                          <option selected value="<?php echo $i?>"><?php echo $i?></option>
                          @else
                          <option value="<?php echo $i?>"><?php echo $i?></option>
                          @endif
                        @endfor
                        </select>
                        <span class="mx-1">Năm:</span>
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
                  <div class="col-4">
                    <div class="row mb-3">
                      <label for="inputEmail1"  class="col-sm-4 col-form-label">Lớp:</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm lop" name="lop" aria-label="Default select example">
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
                    <div class="row mb-3">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Khoa:</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm lop" name="khoa" aria-label="Default select example">
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
                    <div class="row mb-3">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Chuyên ngành:</label>
                      <div class="col-sm-8">
                        <input  class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-4 col-form-label">Giới tính:</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm" name="gioitinh" aria-label="Default select example">
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
                        </select>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- --end -->
                <!-- below avatar session -->
                <div class="row mb-3 mt-5">
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Tôn giáo(*):</label>
                      <div class="col-sm-8">
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
                  </div>
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Dân tộc:</label>
                      <div class="col-sm-8">
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
                  </div>
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Quốc tịch:</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm"readonly="readonly" aria-label="Default select example">
                          <option selected>Việt Nam</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Số CMND/CCCD(*):</label>
                      <div class="col-sm-8">
                        <input  value="{{$in->cmnd}}" name="cmnd" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Ngày cấp(*):</label>
                      <div class="col-sm-8 d-flex align-items-center">
                      <select class="form-control form-control-sm" name="dc" aria-label="Default select example">
                        
                        @for ($i = 1; $i < 32; $i++)
                          @if($d1==$i)
                          <option selected value="<?php echo $i?>"><?php echo $i?></option>
                          @else
                          <option value="<?php echo $i?>"><?php echo $i?></option>
                          @endif
                        @endfor
                        </select>
                        <span class="mx-1">Tháng:</span>
                        <select class="form-control form-control-sm"name="mc" aria-label="Default select example">
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
                  </div>
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Nơi cấp(*):</label>
                      <div class="col-sm-8">
                        <input  value="{{$in->noicap}}" name="noicap" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Nơi sinh (Tỉnh/Tp) (*):</label>
                      <div class="col-sm-8">
                        <input  value="{{$in->noisinh}}" name="noisinh"class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Email(*):</label>
                      <div class="col-sm-8">
                        <input  value="{{$in->email}}" name="email" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Điện thoại(*):</label>
                      <div class="col-sm-8">
                        <input  value="{{$in->dienthoai}}" name="dienthoai" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Hộ khẩu thường trú(*):</label>
                      <div class="col-sm-8">
                        <input  value="{{$in->hokhau}}" name="hokhau" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Là địa chỉ của (*):</label>
                      <div class="col-sm-8">
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
                  </div>
                  <div class="col"></div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Tỉnh/Thành Phố(*):</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm" name="tinh" aria-label="Default select example" id="provinve-city">
                          <!-- <option selected>Open</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option> -->
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Quận/Huyện(*):</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm" name="huyen" aria-label="Default select example" id="district">
                        <option value="0">--Chọn quận, huyện</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Xã/Phường(*):</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm" name="xa" aria-label="Default select example" id="ward">
                        <option value="0">--Chọn phường, xã</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Số bảo hiểm(*):</label>
                      <div class="col-sm-8">
                        <input  value="{{$in->sobaohiem}}" name="sobaohiem" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Hiệu lực bảo hiểm(*):</label>
                      <div class="col-sm-8 d-flex align-items-center">
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
                  <div class="col d-flex align-items-center">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Diện cấp thẻ miễn phí
                      </label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Tài khoản ngân hàng:</label>
                      <div class="col-sm-8">
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
                  </div>
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Số tài khoản:</label>
                      <div class="col-sm-8">
                        <input  value="{{$in->stk}}"name="stk" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Tài khoản Office365:</label>
                      <div class="col-sm-8 d-flex align-items-center">
                        <span>{{$in->idsv}}@sv.ute.udn.vn</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Khu vực tuyển sinh(*):</label>
                      <div class="col-sm-8">
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
                  </div>
                  <div class="col">
                    <div class="row">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Đối tượng tuyển sinh(*):</label>
                      <div class="col-sm-8">
                        <input  class="form-control form-control-sm" value="{{$in->doituong}}" name="doituong" id="inputEmail1">
                      </div>
                    </div>
                  </div>
                  <div class="col"></div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
        <div class="d-flex justify-content-center mt-3 mx-3">
            <button type="submit" class="btn btn-light font-weight-bold">Submit Form</button>
          </div>
      </form>
@endsection
