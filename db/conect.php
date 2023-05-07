<?php
$host = "localhost";
$username = "root";
$password="";
$dbname="phuc-store-data";


$conn = new mysqli($host,$username,$password,$dbname);

if($conn->connect_error){
    die("Ket noi khong thanh cong". $conn->connect_error);
}
header("Location: halong.html");

?>