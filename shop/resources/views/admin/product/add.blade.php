@extends('admin.layout.layout')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>Thêm</small>
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
            @if(session('errfile'))
                <div class="alert alert-danger">
                    <strong>{{session('errfile')}}</strong>
                </div>
            @endif
           
            <form action="admin/product/add" method="POST" enctype="multipart/form-data">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name')}}" placeholder="Nhập tên">
                </div>
                <div class="form-group">
                    <label>Loại sản phẩm</label>
                    <select class="form-control" name="id_type">
                        @foreach($protypes as $protype)
                        <option value="{{ $protype->id }}">{{ $protype->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" id="demo" class="form-control" rows="3">{{ old('description')}}</textarea>
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input name="unit_price" id="unit_price" class="form-control" >{{ old('unit_price')}}</input>
                </div>
                <div class="form-group">
                    <label>Giá khuyến mãi</label>
                    <input type="text" name="promotion_price" id="promotion_price" class="form-control" value="{{ old('promotion_price')}}">
                </div>
                <div class="form-group">
                    <label>Kiểu</label>
                    <input type="text" name="unit" id="unit" class="form-control" value="{{ old('unit')}}" >
                </div>
                <div class="form-group">
                    <label>SP mới</label>
                    <!-- <input type="text" name="unit" id="unit" class="form-control" value="{{ old('unit')}}" > -->
                    <select class="wc-select" name="new">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label>Hình Ảnh</label>
                    <input type="file" name="image" class="form-control" placeholder="">
                </div>
                
                <button type="reset" class="btn btn-default">Làm Mới</button>
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