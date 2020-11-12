<?php session_start();?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
          <!-- Header -->
          <?php include('app/include/header.php') ; ?>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
    
    <!-- Post Slider-->
    <div class="post-slider">
        <h1 class="slider-title"></h1>
        <i class="fas fa-chevron-right next"></i>
        <i class="fas fa-chevron-left prev"></i>
        
        <div class="post-wrapper">
            


            <div class="post">
                <img src="assets/image/welcome.jpg" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="#">Lời chào mừng</a></h4>
                    <i class="fas fa-user"> Trọng Hiếu </i>
                    &nbsp;
                    <i class="fas fa-calendar-alt"> Sep 12, 2020</i>
                </div>
            </div>

            <div class="post">
                <img src="assets/image/TuyenSinhDH.jpg" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="#">Tuyển sinh Đại học chính quy</a></h4>
                    <i class="fas fa-user"> Trọng Hiếu </i>
                    &nbsp;
                    <i class="fas fa-calendar-alt"> Sep 12, 2020</i>
                </div>
            </div>

            <div class="post">
                <img src="assets/image/unilead banner (2).jpg" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="#">Thông báo Học bổng UNILEAD 2021</a></h4>
                    <i class="fas fa-user"> Trọng Hiếu  </i>
                    &nbsp;
                    <i class="fas fa-calendar-alt"> Sep 12, 2020 </i>
                </div>
            </div>

            <div class="post">
                <img src="assets/image/TuyenSinhThacSi.jpg" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="#">Tuyển sinh trình độ thạc sĩ</a></h4>
                    <i class="fas fa-user"> Trọng Hiếu  </i>
                    &nbsp;
                    <i class="fas fa-calendar-alt"> Sep 12, 2020 </i>
                </div>
            </div>
            
        </div>

    </div>

    <!-- Content -->
<div class="content clearfix">

    <!-- Main Content -->
    <div class="main-content">
        <h1 class="recent-post-title">Tin tức gần đây</h1>

        <div class="post">
            <img src="assets/image/slide1.jpg" alt="" class="post-image">
            <div class="post-preview">
                <h2><a href="#">Tuyển sinh Đại học chính quy</a></h2>
                <i class="fas fa-user"> Trọng Hiếu </i>
                &nbsp;
                <i class="fas fa-calendar-alt"> Sep 12, 2020</i>
                <p class="preview-text" style="text-align: left;">
                    Căn cứ Công văn số 1778/BGDĐT-GDĐH ngày 22/5/2020 về hướng dẫn công tác tuyển sinh trình độ đại học của Bộ Giáo dục và Đào tạo,Trường Đại học Thủy lợi thông báo tuyển sinh đại học hệ chính quy năm 2020.
                <a href="#" class="btn read-more">Xem chi tiết</a>
            </div>
        </div>

        <div class="post">
            <img src="assets/image/slide2.JPG" alt="" class="post-image">
            <div class="post-preview" >
                <h2><a href="#">Tuyển sinh trình độ thạc sĩ</a></h2>
                <i class="fas fa-user"> Trọng Hiếu </i>
                &nbsp;
                <i class="fas fa-calendar-alt"> Sep 12, 2020</i>
                <p class="preview-text" style="text-align: left;" >
                    Trường Đai học Thủy lợi thông báo về  kế hoạch tuyển sinh đào tạo trình độ thạc sĩ năm 2020 như sau: Thông báo tuyển sinh đào tạo thạc sĩ đợt 1 năm 2020.
                </p>
                <a href="#" class="btn read-more">Xem chi tiết</a>
            </div>
        </div>

        <div class="post">
            <img src="assets/image/slide3.JPG" alt="" class="post-image">
            <div class="post-preview">
                <h2><a href="#">Thông báo Học bổng UNILEAD 2021</a></h2>
                <i class="fas fa-user"> Trọng Hiếu </i>
                &nbsp;
                <i class="fas fa-calendar-alt"> Sep 12, 2020</i>
                <p class="preview-text" style="text-align: left;">
                    Cơ quan Trao đổi Hàn lâm Đức (DAAD) trân trọng gửi thông tin Chương trình Học bổng UNILEAD 2021 dành cho các nhà quản lý giáo dục.
                </p>
                <a href="#" class="btn read-more">Xem chi tiết</a>
            </div>
        </div>

    </div>
    <!-- //Main Content -->
    <div class="sidebar">
        <!-- <div class="section search">
            <h2 class="section-title">Search</h2>
            <form action="index.html" method="post">
                <input type="text" name="search-term" class="text-input" placeholder="Search...">
            </form>
        </div> -->

        <div class="section topics">
            <h2 class="section-title">Chủ đề</h2>
            <ul>
                <li><a href="#">Lời chào mừng</a></li>
                <li><a href="#">Giảng viên</a></li>
                <li><a href="#">Nghiên cứu khoa học</a></li>
                <li><a href="#">Đào tạo</a></li>
                <li><a href="#">Ảnh khoa CNTT</a></li>

            </ul>
        </div>

    <!-- <div class="sidebar">
        <div class="section search">
            <h2 class="section-title">Search</h2>
            <form action="index.html" method="post">
                <input type="text" name="search-term" class="text-input" placeholder="Search...">
            </form>
        </div> -->


    <!-- // Content -->

    </div>

</div>

</div>
<!-- //Page Wrapper-->

    <!--Footer -->
    <?php include('app/include/footer.php') ; ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/ajax.js"></script>
    <!-- Slick -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
</body>
</html>