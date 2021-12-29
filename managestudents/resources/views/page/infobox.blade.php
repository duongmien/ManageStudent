@extends('layout')
@section('content')
<?php

use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Session;
    $message = Session::get('message');
    if($message){
        echo '<script>alert("'.$message.'");</script> ';
        Session::put('message',null);
    }
    ?>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
      </symbol>
      <symbol id="home" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
      </symbol>
      <symbol id="speedometer2" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
      </symbol>
      <symbol id="table" viewBox="0 0 16 16">
        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
      </symbol>
      <symbol id="people-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </symbol>
      <symbol id="grid" viewBox="0 0 16 16">
        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
      </symbol>
    </svg>
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
                </div>
                <!-- admin -->
                <!-- <div class="col-5">
                    <div class="row mb-3">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Họ và tên:</label>
                      <div class="col-sm-8">
                        <input type="email"  class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail2" class="col-sm-4 col-form-label">Chương trình đào tạo:</label>
                      <div class="col-sm-8">
                        <input type="email"  class="form-control form-control-sm" id="inputEmail2">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-4 col-form-label">Ngành:</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm nganh" aria-label="Default select example">
                          <option selected>Ngành</option>
                          @foreach($allnganh as $n)
                            <option value="{{$n->idnganh}}">{{$n->tennganh}}</option>
                          @endforeach
                        </select> 
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-4 col-form-label">Sinh ngày:</label>
                      <div class="col-sm-8 d-flex align-items-center">
                        <select class="form-control form-control-sm" aria-label="Default select example">
                          <option selected>1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                        </select>
                        <span class="mx-1">Tháng:</span>
                        <select class="form-control form-control-sm" aria-label="Default select example">
                          <option selected>1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                        </select>
                        <span class="mx-1">Năm:</span>
                        <select class="form-control form-control-sm"  aria-label="Default select example">
                          <option selected>1999</option>
                          <option value="1">2000</option>
                          <option value="2">2001</option>
                          <option value="3">2002</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="row mb-3">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Lớp:</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm lop" aria-label="Default select example">
                          <option selected>Lớp</option>
                          @foreach($alllopsh as $n)
                            <option value="{{$n->idlop}}">{{$n->tenlop}}</option>
                          @endforeach
                        </select>  
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail1" class="col-sm-4 col-form-label khoa">Khoa:</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm" aria-label="Default select example">
                          <option selected>Khoa</option>
                          @foreach($allkhoa as $n)
                            <option value="{{$n->idkhoa}}">{{$n->tenkhoa}}</option>
                          @endforeach
                        </select>  
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail1" class="col-sm-4 col-form-label">Chuyên ngành:</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control form-control-sm" id="inputEmail1">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-4 col-form-label">Giới tính:</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm"  aria-label="Default select example">
                          <option value="1">Nam</option>
                          <option value="2">Nữ</option>
                          <option value="3">Khác</option>
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
      @endforeach
    </main>
    <footer></footer>
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
    <script>
    </script>
@endsection
