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
                                <?php $i = 1; ?>
                                @foreach($all_khoa as $key => $cate_pro)
                            <tr>
                                <td class="text-center"><?php echo $i++; ?></td>
                                <td class="text-center">{{$cate_pro->tenkhoa}}</td>
                                <td class="text-center">
                                    <a href="{{URL::to('/edit-khoa/'.$cate_pro->idkhoa)}}" class="active styling-edit" ui-toggle-class="">
                                        <i class="nc-icon nc-ruler-pencil"></i>
                                    </a>
                                    <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="{{URL::to('/delete-khoa/'.$cate_pro->idkhoa)}}" class="active styling-edit" ui-toggle-class="">
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