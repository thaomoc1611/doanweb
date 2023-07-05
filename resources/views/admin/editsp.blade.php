<!DOCTYPE html>
<html>
<head>
  <title>Thêm thông tin sản phẩm</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    label {
      display: block;
      margin-bottom: 5px;
    }
    button {
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Thêm thông tin sản phẩm</h1>
    <form action="/editsp/{{$products->maSP}}" method="POST">
      <div class="form-group">
        <label for="id">ID:</label>
        <input type="text" class="form-control" name="id" id="id" value="{{$products->maSP}}">
      </div>

      <div class="form-group">
        <label for="ma_nhom">Mã nhóm:</label>
        <select class="form-control" name="ma_nhom" id="ma_nhom">
          <option value="0">Chọn</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>

      <div class="form-group">
        <label for="ten_san_pham">Tên sản phẩm:</label>
        <input type="text" class="form-control" name="ten_san_pham" id="ten_san_pham" value="{{$products->tenSP}}">
      </div>

      <div class="form-group">
        <label for="thong_tin_san_pham">Thông tin sản phẩm:</label>
        <textarea class="form-control" name="thong_tin_san_pham" id="thong_tin_san_pham" >{{$products->thongtinSP}}</textarea>
      </div>

      <div class="form-group">
        <label for="hinh_anh">Hình ảnh:</label>
        <input type="file" class="form-control-file" name="hinh_anh" id="hinh_anh" value="{{$products->hinhAnh}}">
      </div>

      <div class="form-group">
        <label for="mau_sac">Màu sắc:</label>
        <input type="text" class="form-control" name="mau_sac" id="mau_sac" value="{{$products->mausac}}">
      </div>

      <div class="form-group">
        <label for="kich_thuoc">Kích thước:</label>
        <input type="text" class="form-control" name="kich_thuoc" id="kich_thuoc" value="{{$products->kichthuoc}}">
      </div>

      <div class="form-group">
        <label for="dung_luong">Dung lượng:</label>
        <input type="text" class="form-control" name="dung_luong" id="dung_luong" value="{{$products->dung_luong}}">
      </div>

      <div class="form-group">
        <label for="gia">Giá:</label>
        <input type="text" class="form-control" name="gia" id="gia" value="{{$products->gia}}">
      </div>

      <div class="form-group">
        <label for="so_luong_ban">Số lượng bán:</label>
        <input type="text" class="form-control" name="so_luong_ban" id="so_luong_ban" value="{{$products->soLuongBan}}">
      </div>

      <div class="form-group">
        <label for="so_luong_hien_co">Số lượng hiện có:</label>
        <input type="text" class="form-control" name="so_luong_hien_co" id="so_luong_hien_co" value="{{$products->soHienCo}}">
      </div>

      <div class="form-group">
        <label for="nha_san_xuat">Nhà sản xuất:</label>
        <input type="text" class="form-control" name="nha_san_xuat" id="nha_san_xuat" value="{{$products->nhaSX}}">
      </div>

      <div class="form-group">
        <label for="tinh_trang">Tình trạng:</label>
        <input type="text" class="form-control" name="tinh_trang" id="tinh_trang" value="{{$products->tinhtrang}}">
      </div>

      <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
      @csrf
    </form>
  </div>
</body>
</html>
