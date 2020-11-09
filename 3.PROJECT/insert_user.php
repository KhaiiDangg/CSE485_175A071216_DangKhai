<?php
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){

// CHECK IF FIELDS ARE NOT EMPTY
if(!empty(trim($_POST['username'])) && !empty(trim($_POST['email'])) && !empty($_POST['password'])){

// Escape special characters.
$username = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['username']));
$email = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['email']));

//IF EMAIL IS VALID
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {  

// CHECK IF EMAIL IS ALREADY REGISTERED
$check_email = mysqli_query($db_connection, "SELECT `email` FROM `user` WHERE email = '$email'");

if(mysqli_num_rows($check_email) > 0){    
$error_message = "Email này đã tồn tại . Xin hãy thử một Email khác";
}
else{
// IF EMAIL IS NOT REGISTERED
/* -- 

ENCRYPT USER PASSWORD USING PHP password_hash function 
LEARN ABOUT PHP password_hash - http://php.net/manual/en/function.password-hash.php

-- */

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// INSER USER INTO THE DATABASE
$insert_user = mysqli_query($db_connection, "INSERT INTO `user` (username, email, password) VALUES ('$username', '$email', '$password')");

if($insert_user === TRUE){
$success_message = "Đăng ký tài khoản thành công";
}
else{
$error_message = "Oops! something wrong.";
}
}    
}
else {
// IF EMAIL IS INVALID
$error_message = "Không được bỏ trống Email";
}
}
else{
// IF FIELDS ARE EMPTY
$error_message = "Hãy điền đầy đủ thông tin";
}
}
?>