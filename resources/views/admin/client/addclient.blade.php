@extends('admin.client')
@section('content')
    <form action="/admin/client/addclient" method="post">

        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Mã người dùng</label>
                <input type="text" name="malop" class="form-control" id="malop" placeholder="Nhập mã thể loại">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tên người dùng</label>
                <input type="text" name="tenlop" class="form-control" id="tenlop" placeholder="Nhập tên thể loại">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ngày sinh</label>
                <input type="text" name="mota" class="form-control" id="mota" placeholder="Nhập ngày sinh">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Giới tính</label>
                <input type="text" name="mota" class="form-control" id="mota" placeholder="Nhập giới tính">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Điện thoại</label>
                <input type="text" name="mota" class="form-control" id="mota" placeholder="Nhập điện thoại">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Địa chỉ</label>
                <input type="text" name="mota" class="form-control" id="mota" placeholder="Nhập địa chỉ">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
        @csrf
    </form>
@endsection
