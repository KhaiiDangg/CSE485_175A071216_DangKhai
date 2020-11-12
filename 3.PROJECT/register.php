<?php 
session_start();
require 'app/database/config.php';
require 'insert_user.php';
// IF USER LOGGED IN
// if(isset($_SESSION['email'])){
// header('Location: home.php');
// exit;
// }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css -->
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="loginform">
      <div class="container-login">
        <div class="wrap-login">
        <div class="login-pic" >
          <img src="assets/image/login.png" alt="IMG">
        </div>

      <form class="login-form validate-form" method="post">
        <span class="login-form-title"> Đăng ký </span>
        <div class="wrap-input">
            <input class="input" type="text" name="username" placeholder="Username"> 
            <span class="symbol-input"> <i class="fas fa-user"></i></i></span>
        </div>

        <div class="wrap-input">
            <input class="input" type="text" name="email" placeholder="Email"> 
            <span class="symbol-input"> <i class="fas fa-envelope"></i></i></span>
        </div>

      <div class="wrap-input">
            <input class="input" type="password" name="password" placeholder="Password">
            <span class="symbol-input"> <i class="fa fa-lock" aria-hidden="true"></i></span>
      </div>

      <div class="container-login-form-btn">
          <button type="submit" class="login-form-btn"> Đăng ký </button>
      </div>

            <?php
            if(isset($success_message)){
                echo '<div class="success_message">'.$success_message.'</div>'; 
            }
            if(isset($error_message)){
                echo '<div class="error_message">'.$error_message.'</div>'; 
            }
            ?>

      <div class="forgot"> <span class="txt1"> *Lưu ý :</span>
          <a class="txt2" href="#"> Điền đẩy đủ thông tin  </a>
      </div>

      <div class="create"> 
        <a class="txt2" href="login.php"> Nếu đã có tài khoản : Đăng nhập <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> </a>
      </div>
      </form>

      </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>