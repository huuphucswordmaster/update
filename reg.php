<?php
require 'db/conect.php';
if(isset($_POST['btn-reg'])){
    $fullname = $_POST['fullname']; 
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    // $password=md5($password);
    $sql = "INSERT INTO `tbl_users` (`fullname`,`email`,`username`,`phone`,`password`) VALUE('$fullname','$email','$username','$phone','$password')";
    $conn->query($sql);
}

?>
