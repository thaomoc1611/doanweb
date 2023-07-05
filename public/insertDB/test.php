<?php
// Kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insertdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Truy vấn cơ sở dữ liệu
$sql = "SELECT maSP, maNhom, tenSP, thongtinSP, hinhanh, mausac, kichthuoc, dungluong, soLuongBan, soHienCo, nhaSX, tinhtrang FROM sanpham";
$result = $conn->query($sql);

// Kiểm tra và hiển thị thông tin
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Mã sản phẩm: " . $row["maSP"] . "<br>";
        echo "Mã nhóm: " . $row["maNhom"] . "<br>";
        echo "Tên sản phẩm: " . $row["tenSP"] . "<br>";
        echo "Thông tin sản phẩm: " . $row["thongtinSP"] . "<br>";
        echo "Hình ảnh: " . $row["hinhanh"] . "<br>";
        echo "Màu sắc: " . $row["mausac"] . "<br>";
        echo "Kích thước: " . $row["kichthuoc"] . "<br>";
        echo "Dung lượng: " . $row["dungluong"] . "<br>";
        echo "Số lượng bán: " . $row["soLuongBan"] . "<br>";
        echo "Số hiện có: " . $row["soHienCo"] . "<br>";
        echo "Nhà sản xuất: " . $row["nhaSX"] . "<br>";
        echo "Tình trạng: " . $row["tinhtrang"] . "<br>";
        echo "<br>";
    }
} else {
    echo "Không có thông tin sản phẩm.";
}

// Đóng kết nối
$conn->close();
?>
