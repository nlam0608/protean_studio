@extends('home')
@section('content')
<div class="main-container">
    <section class="get-in-touch">
        <h1>Thêm mới danh mục </h1>
        <form method="post" action="{{ route('store.category') }}" enctype="multipart/form-data" required>
            @csrf
            <div class="form-group col-md-6">
                    <label>Tên danh mục</label>
                    <input type="text" class="form-control" id="input" name="name">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
            </div>
            <div class="form-group col-md-6">
                    <label>Trạng thái</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="status">
                        <option>Active</option>
                        <option>Inactice</option>
                    </select>
                    @error('status')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Lưu</button>
            <button class="btn btn-danger" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </section>

</div>
@endsection