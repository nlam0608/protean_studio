@extends('home')
@section('content')
    <div class="main-container">
        <h1>Chỉnh sửa sản phẩm </h1>
        <form method="post" action="{{ route('edit.product', $product->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Mã sản phẩm</label>
                    <input type="number" value="{{ $product->id }}" name="id" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Tên sản phẩm</label>
                    <input type="name" value="{{ $product->name }}" class="form-control" name="name">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Thể loại</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="category"
                        value="{{ $product->category }}">
                        <option>sản phẩm 1</option>
                        <option>sản phẩm 2</option>
                        <option>sản phẩm 3</option>
                        <option>sản phẩm 4</option>
                        <option>sản phẩm 5</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Giá</label>
                    <input type="number" value="{{ $product->price }}" class="form-control" name="price">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Só lượng</label>
                    <input type="text" value="{{ $product->quantity }}" class="form-control" name="quantity">
                    @error('quantity')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                 <div class="form-group col-md-6">
                    <label>Ảnh</label>
                    <input type="file" value="{{ $product->image}}"name="image" class="form-control-file">
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date">Trạng Thái</label>
                    <select class="form-control" value="{{ $product->status}}"id="exampleFormControlSelect1" name="status">
                        <option>Active</option>
                        <option>Inactice</option>
                    </select>

                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
            <button class="btn btn-danger" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>
@endsection