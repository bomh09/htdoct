@extends('admin.layout.layout')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại sản phẩm
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{ $err }}<br>
                        @endforeach
                    </div>
                @endif
                @if(Session::has('flash_success'))
                <div class="alert alert-success">
                    {{ session('flash_success') }}
                </div>
                @endif
                <form action="admin/typeproduct/add" method="POST">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Tên Loại sản phẩm</label>
                        <input class="form-control" name="name" id="name" value="{{ old('name')}}" placeholder="Tên Loại sản phẩm" />
                    </div>
                     <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" name="description" id="description">{{ old('description')}}</textarea>
                    </div>
                    
                    <button type="reset" class="btn btn-default">Làm mới</button>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
@section('script')
    
@endsection
