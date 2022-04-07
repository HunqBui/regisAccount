<?php
$dblocal="localhost";
$dbuser="root";
$dbpass="hungbui224";
$dbname="testasm";
$conn=mysqli_connect($dblocal,$dbuser,$dbpass,$dbname);
//$conn=mysqli_connect('localhost', 'root', '', 'mydbphp');
if($conn){
    echo "<p>Kết nối thành công!</p>";
    mysqli_query($conn,"SET NAMES 'UTF8'");
}else{
    echo "Kết nối thất bại!".mysqli_connect_error();
}
?>