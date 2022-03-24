@extends('home')
@section('content')
    <div class="main-container">
        <section class="get-in-touch">
            <h1>Thêm mới sản phẩm </h1>
            <form method="post" action="{{ route('store.product') }}" enctype="multipart/form-data" required>
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Mã sản phẩm</label>
                        <input type="number" class="form-control" id="input" name="id">
                        @error('id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Tên sản phẩm</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Danh mục</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="category">
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
                        <input type="number" class="form-control" id="price" name="price">
                        @error('price')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Số lượng</label>
                        <input type="number" class="form-control" id="quantity" name="quantity">
                        @error('quantity')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Ảnh</label>
                    <input type="file" name="image" class="form-control-file">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Trạng Thái</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                            <option>Active</option>
                            <option>Inactice</option>
                        </select>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Lưu</button>
                <button class="btn btn-danger" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </section>

    </div>
@endsection