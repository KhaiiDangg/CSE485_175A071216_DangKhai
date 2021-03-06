
<?php 
error_reporting(E_ERROR);
session_start();

?>
<div class="topheader">
  <!--Header-->
  <div class="header">
      <div class="container">
          <div class="info flex">
              <div class="col-lg-3 titlelogo">
                  <span>Trường Đại học Thủy Lợi-TLU</span>
              </div>
              <a href='project/admindemo/dist/hoso.php#'> </a>
              <div class="col-lg-5 flex">
                  
                  <div class="col-md-4 menu-top">
                  <?php
                
                  if(isset($_SESSION['email'])&&$_SESSION['phanquyen']==1){
                    echo " <a class=\"nav-link\" href=\"admindemo/dist/index.php\"> ". $_SESSION['name']." |</a>";
                  
                  }
                  elseif(isset($_SESSION['email'])){
                    echo $_SESSION['name']  ;
                }
                  else{
                    echo " <a class=\"nav-link\" href=\"login.php\"> Login |</a>";

                  }

                ?>



                     
                  </div>
                  <?php
                  if(isset($_SESSION['email'])){
                        echo "   <div class='col-md-4 menu-top'><a class='nav-link' href='logout.php'>Đăng Xuất
                      |</a>
  </div>"; ;


                  }
                  else{
                    echo "   <div class='col-md-4 menu-top'><a class='nav-link' href='register.php'>Register
                    |</a>
</div>";

                  }

                ?>
                  
               
                  <div class="col-md-4 menu-top">
                      <a href="" class="nav-link language">Ngôn ngữ:&nbsp; 
                          <img src="assets/image/vietnam-flag-icon-16.png" alt=""> 
                          <img src="assets/image/united-kingdom-flag-icon-16.png" alt=""></a>
                  </div>
                     
              </div>
              <div class="col-lg-4 search">
                  <input class="search-bar" type="text" placeholder="Tìm kiếm">
                  <i class="fa fa-search"></i>
              </div>
          </div>
      </div>
  </div>
  <!--Logo img-->
  <div class="logo">
      <img  src="assets/image/logo.jpg" width="547" height="82" alt="">
  </div>
  <!--Header Menu-->
  <div class="menu-header">
      <div class="dropdown">
          <button class="dropbtn"><a href="trangchu.php">TRANG CHỦ</a></button>
        </div>
        <div><span>|</span></div>
        <div class="dropdown">
          <button class="dropbtn"><a href="">GIỚI THIỆU</a></button>
          <div class="dropdown-content">
              <div class="whitespace"></div>
              <div class="dropdown-contents">
                  <a href="#">Logo Khoa CNTT</a>
                  <a href="#">Lời chào mừng</a>
                  <a href="#">Tổ chức</a>
              </div>

          </div>
        </div>
      <div><span>|</span></div>
        <div class="dropdown">
          <button class="dropbtn"><a href="">NGHIÊN CỨU KHOA HỌC</a></button>
          <div class="dropdown-content">
              <div class="whitespace"></div>
              <div class="dropdown-contents">
                  <a href="#">Các đề tài, dự án</a>
                  <a href="#">Thông tin seminar</a>
                  <a href="#">Công trình công bố</a>
                  <a href="#">Các phòng thí nghiệm</a>
              </div>

          </div>
        </div>
        <div><span>|</span></div>
        <div class="dropdown">
          <button class="dropbtn"><a href="">ĐÀO TẠO</a></button>
          <div class="dropdown-content">
              <div class="whitespace"></div>
              <div class="dropdown-contents">
                  <a href="#">Đào tạo đại học</a>
                  <a href="#">Đào tạo sau đại học</a>
                  <a href="#">Chuẩn đầu ra</a>
                  <a href="#">Định hướng ngành nghề</a>
                  <a href="#">Mô hình đào tạo</a>
                  <a href="#">Đề cương môn học</a>
              </div>
          </div>
        </div>
        <div><span>|</span></div>
        <div class="dropdown">
          <button class="dropbtn"><a href="">BỘ MÔN TRUNG TÂM</a></button>
          <div class="dropdown-content">
              <div class="whitespace"></div>
              <div class="dropdown-contents">
            <a href="#">CN phần mềm</a>
            <a href="#">Hệ thống thông tin</a>
            <a href="#">Khoa học máy tính</a>
            <a href="#">Kỹ thuật máy tính và mạng</a>
            <a href="#">Toán học</a>
            <a href="#">Tin học và Kỹ thuật tín toán</a>
            <a href="#">Trung tâm tin học</a>
              </div>
          </div>
        </div>
        <div><span>|</span></div>
        <div class="dropdown">
          <button class="dropbtn"><a href="">SINH VIÊN</a></button>
          <div class="dropdown-content">
              <div class="whitespace"></div>
              <div class="dropdown-contents">
                  <a href="#">Tài liệu sinh viên</a>
                  <a href="#">Tổ tư vấn học tập</a>
                  <a href="#">Biểu mẫu ĐATN</a>
                  <a href="#">Luận văn tốt nghiệp</a>
              </div>
          </div>
        </div>
        <div><span>|</span></div>
        <div class="dropdown">
          <button class="dropbtn"><a href="">TIN TỨC</a></button>
          <div class="dropdown-content">
              <div class="whitespace"></div>
              <div class="dropdown-contents">
                  <a href="#">Sự kiện</a>
                  <a href="#">CSE trên báo</a>
              </div>
          </div>
        </div>
        <div><span>|</span></div>
        <div class="dropdown">
          <button class="dropbtn"><a href="">THÔNG BÁO</a></button>
          <div class="dropdown-content">
              <div class="whitespace"></div>
              <div class="dropdown-contents">
            <a href="#">Thông báo</a>
            <a href="#">TB Đào tạo</a>
            <a href="#">Nghiên cứu khoa học</a>
            <a href="#">Tuyển dụng</a>
            <a href="#">Học bổng</a>
            <a href="#">Thông báo khác</a>
              </div>
          </div>
        </div>
        <div><span>|</span></div>
        <div class="dropdown">
          <button class="dropbtn"><a href="">LIÊN HỆ</a></button>
        </div>
        <div><span>|</span></div>

                <?php
                    if(isset($_SESSION['email'])&&$_SESSION['phanquyen']==1){
                     
                    
                    }
                  elseif(isset($_SESSION['email'])){
                      echo "  <div class='dropdown'>
                      <button class='dropbtn'><a href='' >XÉT TUYỂN ONLINE</a></button>
                      <div class='dropdown-content'>
                          <div class='whitespace'></div>
                          <div class='dropdown-contents'>
                              <a href='dkyxethocba.php'>XÉT TUYỂN HỌC BẠ</a>
                              <a href='dkyxettuyen.php'>XÉT TUYỂN DỰA TRÊN KẾT QUẢ THI THPT</a>
                          </div>

                      </div>
                    </div>";


                  }
                  else{
                    echo "  <div class='dropdown'>
                    <button class='dropbtn'><a href='login.php' >XÉT TUYỂN ONLINE</a></button>
                   
                  </div>";

                  }

                ?>

                  

       </div>
  </div>
  <div class="border-menu"></div>