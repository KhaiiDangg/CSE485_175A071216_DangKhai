<!DOCTYPE php>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Admin Page</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
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
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Tra cứu thông tin
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="qlyhocba.php">Đký xét tuyển học bạ</a>
                                    <a class="nav-link" href="qlyketquathi.php">Đký xét tuyển bằng kết quả thi THPT quốc gia</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="qlyuser.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Quản lý User
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
                        <h1 class="mt-4">Hỗ trợ</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">CONTACT US</a></li>
                            <li class="breadcrumb-item active">Website:&nbsp;<a href="http://tlu.edu.vn"><span style="text-decoration: underline;">tlu.edu.vn</span></a></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-0">
                                    <span>TRƯỜNG ĐẠI HỌC THỦY LỢI<br>Địa chỉ: 175 Tây Sơn, Đống Đa, Hà Nội<br>Điện thoại: (024) 38522201 - Fax: (024) 35633351<br>Email: phonghcth@tlu.edu.vn</span>
                                </p>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                    <span>CƠ SỞ PHỐ HIẾN<br>Địa chỉ: Quốc lộ 38B Nhật Tân, Tiên Lữ, Hưng Yên<br>Điện thoại: (0221) 3883885<br>Email: Bandtctsvphohien@tlu.edu.vn</span></p>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                    <span>PHÂN HIỆU ĐẠI HỌC THỦY LỢI<br>Địa chỉ 1: Số 2 Trường Sa, P.17, Q.Bình Thạnh, Tp.Hồ Chí Minh<br>Điện thoại: (028) 38400532 - Fax: (028) 38400542<br>Địa chỉ 2: Phường An Thạnh, TP Thuận An, Tỉnh Bình Dương<br>Điện thoại: (065) 3748620 - Fax: (065) 3833489<br>Email: cs2@tlu.edu.vn</span></p>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                    <span>VIỆN ĐÀO TẠO VÀ KHOA HỌC ỨNG DỤNG MIỀN TRUNG<br>Địa chỉ: Số 115 Trần Phú, Thành phố&nbsp;Phan Rang, Tỉnh Ninh Thuận<br>Điện thoại: (0259) 3823027, (0259) 3823028<br>Email:&nbsp;<a href="http://www.tlu.edu.vn/#"><span style="text-decoration: underline;">trungtamdh2@tlu.edu.vn</span></a><br></span></p>
                            </div>
                        </div>
                        
                    </div>
                </main>

            </div>
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
</php>
