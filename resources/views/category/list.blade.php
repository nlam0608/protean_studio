@extends('Home')
@section('content')
<div class="xs-pd-20-10 pd-ltr-20 ">
    <div class="card mt-2">
        <h5 class="card-header">Danh sách danh mục
            <a style="text-ri" href="{{ route('create.category') }}">
            <button type="button" class="btn btn-success">thêm danh mục</button>
            </a>
        </h5>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
                @forelse($categories as $key => $categorie)
                    <tr id="categorie-item-{{ $categorie->id }}">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $categorie->name }}</td>
                        <td>{{ $categorie->status }}</td>
                        <td>
                            <a href="{{ route('update.category', $categorie->id) }}">
                                <button type="button" class="btn btn-primary">sửa</button>
                            </a>
                            <a onclick="alert('Chắc chắn muốn xóa')"
                                href=" {{ route('delete.category', $categorie->id) }}">
                            <button type="button" class="btn btn-danger">xóa</button>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5 ">No data</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
</div>

@endsection