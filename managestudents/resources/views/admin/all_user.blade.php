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
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="update ml-4 mr-2">
                        <button onclick="location.href=`{{URL::to('/add-user')}}`" type="submit" class="btn btn-primary btn-round">Thêm Sinh Viên</button>
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
                            <?php $i = 1; ?>
                            @foreach($alluser as $key => $u)
                            <tr>
                                <td class="text-center"><?php echo $i++; ?></td>
                                <td class="text-center">{{$u->idsv}}</td>
                                <td class="text-center">{{$u->name}}</td>
                                <td class="text-center">{{$u->lop}}</td>
                                <td class="text-center"><img src="{{URL::to('uploads/user/'.$u->anh)}}" height="80" width="80" /></td>
                                <td class="text-center">
                                    <a href="{{URL::to('/edit-user/'.$u->id)}}" class="active styling-edit" ui-toggle-class="">
                                        <i class="nc-icon nc-ruler-pencil"></i>
                                    </a>
                                    <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="{{URL::to('/delete-user/'.$u->id)}}" class="active styling-edit" ui-toggle-class="">
                                        <i class="nc-icon nc-simple-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection