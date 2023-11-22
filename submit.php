<?php
// Kết nối đến cơ sở dữ liệu (Thay thông tin của bạn vào các dòng này)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối không thành công: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$age = $_POST['age'];

// Chuẩn bị và thực hiện truy vấn SQL để chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO user_info (fullname, email, age) VALUES ('$fullname', '$email', '$age')";

if ($conn->query($sql) === TRUE) {
  echo "Dữ liệu đã được lưu thành công";
} else {
  echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
