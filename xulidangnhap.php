<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', '', 'phuc-store-data');
$sql = "SELECT * FROM tbl_users WHERE username = '$username'";
$result = $conn->query($sql)->fetch_assoc();
if ($result['password'] == $password) {
    header("Location: loading.html");
} else {
    echo "Sai tên đăng nhập hoặc mật khẩu!";
    echo "<meta http-equiv='refresh' content='2;url=index.php'>";
}
?>