<?php 
$host = 'localhost' ;
$user = 'root' ;
$pass = '';
$db_name = 'kiemtragiuaki' ;

$conn = new mysqli($host, $user, $pass, $db_name) ;

if ($conn->connect_error) {
    die('Kết nối với Database thất bại' . $conn->connect_error) ;
}
?>