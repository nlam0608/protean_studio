@extends('home')
@section('content')
<div class="xs-pd-20-10 pd-ltr-20">
    <div class="card mt-2">
        <h5>Danh sách sản phẩm
            <a href="{{ route('create.product') }}">
                <button type="button" class="btn btn-success">thêm</button>
            </a>
        </h5>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên Sản phẩm</th>
                    {{-- <th>Thể loại</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Ảnh</th></th> --}}
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
                @forelse($products as $key => $product)
                    <tr id="produst-item-{{ $product->id }}">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $product->name }}</td>
                        {{-- <td>{{ $product->category }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ asset('storage/' . $product->image) }}"
                                    style="width: 150px">
                            @else
                                {{ 'chưa có ảnh ' }}
                            @endif
                        </td> --}}
                        <td>{{ $product->status }}</td>
                        <td>
                            <a href="{{ route('update.product', $product->id) }}">
                                <button type="button" class="btn btn-primary">sửa</button>
                            </a>
                            <a onclick="alert('Chắc chắn muốn xóa')"
                                href=" {{ route('delete.product', $product->id) }}">
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
