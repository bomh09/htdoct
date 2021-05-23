@extends('admin.layout.layout')
@section('content')     
<!-- Page Content -->

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="margin-bottom: 50px;">
                <h1 class="page-header">Bài viết
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($protypes as $protype)
                        <tr class="odd gradeX">
                            <td> {{ $protype->id }} </td>
                            <td>
                                {{ $protype->name }}
                            </td>
                            <td>
                                {{ $protype->description }}
                            </td>
                                                      
                            <td>
                                <a href="admin/typeproduct/update/{{$protype->id}}" class="btn btn-info btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa 
                                </a>
                            </td>
                            <td>
                                <a href="admin/typeproduct/delete/{{$protype->id}}" class="btn btn-danger btn-sm">
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
