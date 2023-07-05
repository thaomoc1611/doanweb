@extends('admin.client')
@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <!-- <th>ID</th> -->
                <th>Mã nhóm</th>
                <th>Tên sản phẩm</th>
                <th>Thông tin sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Màu sắc</th>
                <th>Kích thước </th>
                <th>Dung lượng </th>
                <th>Giá</th>
                <th>Số lượng bán</th>
                <th>Số lượng hiện có</th>
                <th>Nhà sản xuất</th>
                <th>Tình trạng</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->maNhom}}</td>
                    <td>{{$product->tenSP}}</td>
                    <td>{{$product->thongtinSP}}</td>
                    <td>{{$product->hinhAnh}}</td>
                    <td>{{$product->mausac}}</td>
                    <td>{{$product->kichthuoc}}</td>
                    <td>{{$product->dungluong}}</td>
                    <td>{{$product->gia}}</td>
                    <td>{{$product->soLuongBan}}</td>
                    <td>{{$product->soHienCo}}</td>
                    <td>{{$product->nhaSX}}</td>
                    <td>{{$product->tinhtrang}}</td>
                    <td>
                        <a href="/editsp/{{$product->maSP}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="/deletesp/{{$product->maSP}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    {{$products->links('pagination::bootstrap-4')}}
@endsection
