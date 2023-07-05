<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insertdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$maSP = $_POST['maSP'];
$maNhom = $_POST['maNhom'];
$tenSP = $_POST['tenSP'];

$hinhAnh = $_FILES['hinhAnh']['name'];
$mauSac = $_POST['mauSac'];
$kichThuoc = $_POST['kichThuoc'];
$dungLuong = $_POST['dungLuong'];
$soLuongBan = $_POST['soLuongBan'];
$soHienCo = $_POST['soHienCo'];

$tinhTrang = $_POST['tinhTrang'];

// Đường dẫn lưu trữ hình ảnh tải lên
$targetDir = "img/";
$targetFile = $targetDir . basename($_FILES["hinhAnh"]["name"]);

// Di chuyển tệp tin tải lên vào thư mục đích
move_uploaded_file($_FILES["hinhAnh"]["tmp_name"], $targetFile);

// Thực hiện câu lệnh INSERT
$sql = "INSERT INTO sanpham (maSP, maNhom, tenSP , hinhanh, mausac, kichthuoc, dungluong, soLuongBan, soHienCo,  tinhTrang) 
        VALUES ('$maSP', '$maNhom', '$tenSP', '$hinhAnh', '$mauSac', '$kichThuoc', '$dungLuong', '$soLuongBan', '$soHienCo', '$tinhTrang')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
