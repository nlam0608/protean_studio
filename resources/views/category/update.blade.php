@extends('home')
@section('content')
    <div class="main-container">
        <h1>Chỉnh sửa danh mục</h1>
        <form method="post" action="{{ route('edit.category', $categorie->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-6">
                <label>Tên danh mục</label>
                <input type="text" value="{{ $categorie->name }}" class="form-control" name="name">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label>Trạng thái</label>
                <select class="form-control" id="exampleFormControlSelect1" name="status"
                    value="{{ $categorie->status }}">
                    <option>Active</option>
                    <option>Inactice</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
            <button class="btn btn-danger" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>
@endsection