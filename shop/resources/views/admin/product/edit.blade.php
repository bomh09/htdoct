@extends('admin.layout.layout')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>Cập nhật</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:70px">
             @if(count($errors)>0)
             <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                {{ $err }}<br>
                @endforeach
            </div>
            @endif
            <form action="admin/product/update/{{$Product->id}}" method="Post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $Product->name}}" placeholder="Nhập tên">
                </div>
                <div class="form-group">
                    <label>Loại sản phẩm</label>
                    
                    <input type="text" name="id_type" id="id_type" class="form-control" value="{{ $Product->id_type}}">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" id="demo" class="form-control" rows="3">{{ $Product->description }}</textarea>
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input name="unit_price" id="unit_price" class="form-control" value="{{ $Product->unit_price }}">
                </div>
                <div class="form-group">
                    <label>Giá khuyến mãi</label>
                    <input type="text" name="promotion_price" id="promotion_price" class="form-control" value="{{ $Product->promotion_price }}">
                </div>
                <div class="form-group">
                    <label>Kiểu</label>
                    <input type="text" name="unit" id="unit" class="form-control" value="{{ $Product->unit }}" >
                </div>
                <div class="form-group">
                    <label>SP mới</label>
                    <!-- <input type="text" name="unit" id="unit" class="form-control" value="{{ old('unit')}}" > -->
                    <select class="wc-select" name="new">
                        <option value="{{ $Product->new }}">{{ $Product->new }}</option>   
                        <option value="0">0</option>   
                        <option value="1">1</option>                     
                    </select>
                </div>
                <div class="form-group">
                    <label>Hình Ảnh</label>
                    <input type="file" name="image" class="form-control" >
                </div>
                <button type="reset" class="btn btn-default">Làm Mới</button>
                <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
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