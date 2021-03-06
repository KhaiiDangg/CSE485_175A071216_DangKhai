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
            <a class="navbar-brand" href="index.php">Admin Page</a>
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
                            <a class="nav-link" href="qlyuser.php" >
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
                        <h1 class="mt-4">Hồ sơ sinh viên : Đăng ký xét tuyển bằng học bạ</h1> <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Bảng hồ sơ sinh viên 
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Chứng minh nhân dân</th>
                                                <th>Họ tên</th>
                                                <th>Giới tính</th>
                                                <th>Ngày sinh</th>
                                                <th>Ngày cấp CMND</th>
                                                <th>Nơi cấp CMND</th>
                                                <th>Số điện thoại</th>
                                                <th>Email</th>
                                                <th>Hộ khẩu thường trú</th>
                                                <th>Tỉnh</th>
                                                <th>Quận/Huyện</th>
                                                <th>Địa chỉ nhận thư</th>
                                                <th>Bậc đào tạo</th>
                                                <th>Loại hình</th>
                                                <th>Nghành</th>
                                                <th>Khu vực ưu tiên </th>
                                                <th>Đối tượng ưu tiên</th>
                                                <th>Tỉnh học lớp 10</th>
                                                <th>Tỉnh học lớp 11</th>
                                                <th>Tỉnh học lớp 12</th>
                                                <th>Trường học lớp 10</th>
                                                <th>Trường học lớp 11</th>
                                                <th>Trường học lớp 12</th>
                                                <th>Điểm trung bình lớp 10</th>
                                                <th>Điểm trung bình lớp 11</th>
                                                <th>Điểm trung bình lớp 12</th>
                                                <th>Điểm xét tuyển</th>
                                                <th>Năm tốt nghiệp</th>
                                                <th>Ghi chú</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                                $sql = "SELECT * FROM  xethocba,hosocanhan where hosocanhan.cmnd=xethocba.cmnd";
                                                $result = $db_connection->query($sql);
                                                
                                                if ($result->num_rows > 0) {
                                                  // output data of each row
                                                  while($row = $result->fetch_assoc()) {
                                                    echo "<tr>
                                                    <td>".$row['cmnd']."</td>
                                                    <td>".$row['hoten']."</td>
                                                    <td>".$row['gioitinh']."</td>
                                                    <td>".$row['ngaysinh']."</td>
                                                    <td>".$row['ngaycapcmnd']."</td>
                                                    <td>".$row['noicapcmnd']."</td>
                                                    <td>".$row['sdt']."</td>
                                                    <td>".$row['email']."</td>
                                                    <td>".$row['hokhau']."</td>
                                                    <td>".$row['tinh']."</td>
                                                    <td>".$row['huyen']."</td>
                                                    <td>".$row['diachinhanthu']."</td>
                                                    <td>".$row['bacdaotao']."</td>
                                                    <td>".$row['loaihinh']."</td>
                                                    <td>".$row['nganh']."</td>
                                                    <td>".$row['khuvucuutien']."</td>
                                                    <td>".$row['doituonguutien']."</td>
                                                    <td>".$row['tinhlop10']."</td>
                                                    <td>".$row['tinhlop11']."</td>
                                                    <td>".$row['tinhlop12']."</td>
                                                    <td>".$row['truonglop10']."</td>
                                                    <td>".$row['truonglop11']."</td>
                                                    <td>".$row['truonglop12']."</td>
                                                    <td>".$row['diemtblop10']."</td>
                                                    <td>".$row['diemtblop11']."</td>
                                                    <td>".$row['diemtblop12']."</td>
                                                    <td>".$row['diemxettuyen']."</td>
                                                    <td>".$row['namtotnghiep']."</td>
                                                    <td>".$row['ghichu']."</td>
                                                    </tr>";
                                                  }
                                                } else {
                                                  echo "0 results";
                                                }
                                                $db_connection ->close();
                                            
                                            ?>
 
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
