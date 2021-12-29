@extends('layout_admin')
@section('admin_content')
<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
        <h4 class="card-title"> Simple Table</h4>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table">
            <thead class=" text-primary">
                <th>
                Name
                </th>
                <th>
                Country
                </th>
                <th>
                City
                </th>
                <th class="text-right">
                Salary
                </th>
            </thead>
            <tbody>
                <tr>
                <td>
                    Dakota Rice
                </td>
                <td>
                    Niger
                </td>
                <td>
                    Oud-Turnhout
                </td>
                <td class="text-right">
                    $36,738
                </td>
                <td class="text-right">
                    <a href="" class="active styling-edit" ui-toggle-class="">
                    <i class="nc-icon nc-ruler-pencil"></i>
                    </a>
                    <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="" class="active styling-edit" ui-toggle-class="">    
                    <i class="nc-icon nc-simple-remove" ></i>
                    </a>
                </td>
                </tr>
                
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection