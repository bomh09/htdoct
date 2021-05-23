@extends('admin.layout.layout')
@section('content')     
<!-- Page Content -->

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="margin-bottom: 50px;">
                <h1 class="page-header">Sản phẩm
                    <small>Danh Sách</small>
                </h1>
                @if(session('flash_success'))
                <div class="alert alert-success">
                    <strong>Thành Công! </strong>{{ session('flash_success') }}
                </div>
                @endif
                 @if(session('flash_err'))
                <div class="alert alert-danger">
                    <strong>Cảnh Báo! </strong>{{ session('flash_err') }}
                </div>
                @endif
                <table class="table table-striped table-bordered table-hover " id="example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Mô tả</th>
                            <th>Giá</th>
                            <th>Giá khuyến mãi</th>
                            <th>Loại bánh</th>
                            <th>Kiểu</th>
                            <th>Ảnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Products as $product)
                        <tr class="odd gradeX">
                            <td> {{ $product->id }} </td>
                            <td>
                                {{ $product->name }}
                            </td>
                            <td>
                                {{ $product->description }}
                            </td>
                            <td> {{ $product->unit_price }} </td>
                            <td> {{ $product->promotion_price }} </td>
                            <td> {{ $product->product_type['name'] }} </td>
                            <td> {{ $product->unit }} </td>
                            <td> 
                                <img src="source/image/product/{{ $product->image }}" width="100px">
                            </td>                            
                            <td>
                                <a href="admin/product/update/{{$product->id}}" class="btn btn-info btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa 
                                </a>
                            </td>
                            <td>
                                <a href="admin/product/delete/{{$product->id}}" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Xoá
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


@endsection
@section('script')

<script src="admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<script src="js/bootstrap-flash-alert.js"></script>
@endsection
