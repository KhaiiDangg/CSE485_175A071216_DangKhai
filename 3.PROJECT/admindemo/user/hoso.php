<?php
    include('../../app/database/config.php') ;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="user.php">My Profile</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">TỔNG QUAN</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Trang chủ
                            </a>
                            <div class="sb-sidenav-menu-heading">CHỨC NĂNG</div>
                            <a class="nav-link collapsed" href="hoso.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Hồ sơ sinh viên
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <!-- <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="qlyhocba.php">Đký xét tuyển học bạ</a>
                                    <a class="nav-link" href="qlyketquathi.php">Đký xét tuyển bằng kết quả thi THPT quốc gia</a>
                                </nav>
                            </div> -->
                            <a class="nav-link" href="myprofile.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-edit"></i></div>
                                My Profile
                            </a>                                   
                            <div class="sb-sidenav-menu-heading">Hỗ trợ</div>
                            <a class="nav-link" href="lienhe.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Liên hệ
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">My Profile</h1> <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                HỒ SƠ CÁ NHÂN
                            </div>
                            <div class="container" style="">
                            <form method="POST" action="xuliedit.php">
                            <input hidden type="text" class="name" name="id" >

                            <label for="hoten"> Họ tên</label> <br>
                            <input type="text" class="hoten" name="hoten" >
                            <br>
                                
                            <label for="email"> Email</label> <br>
                            <input type="text" class="email" name="email" >
                            <br>
                            
                            <label for="gioitinh">Giới tính</label> <br>
                            <input type="text" name="gioitinh" > 

                            <br>

                            <label for="sdt"> Số điện thoại</label> <br>
                            <input type="text" class="sdt" name="sdt" >
                            <br>

                            <label for="hokhau"> Hộ khẩu thường trú</label> <br>
                            <input type="text" class="hokhau" name="hokhau" >
                            <br>

                            <label for="tinh"> Tỉnh </label> <br>
                            <input type="text" class="tinh" name="tinh" >
                            <br>
                            
                            <label for="huyen"> Quận(Huyện) </label> <br>
                            <input type="text" class="huyen" name="huyen" >
                            <br>

                            <label for="diachinhanthu"> Địa chỉ nhận thư</label> <br>
                            <input type="text" class="diachinhanthu" name="diachinhanthu" >
                            <br>
                            
                            <br>
                                <input type="submit" value="Save" class="save">
                                <input  type="button" value="Cancel">
                            </form>
                            </div>
                            <!-- <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>User ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Ngày tạo</th>
                                            </tr>
                                        </thead>

                                        <tbody>   
                                      
                                        </tbody>
                                    </table>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
