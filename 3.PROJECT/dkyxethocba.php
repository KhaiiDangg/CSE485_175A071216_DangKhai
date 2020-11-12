<?php
    include('app/database/config.php') ;
    if($_POST) {
        $hoten = $_POST['hoten'] ;  
        $gioitinh = $_POST['gioitinh'] ;
        $ngaysinh = $_POST['ngaysinh'] ;
        $cmnd = $_POST['cmnd'] ;
        $ngaycap = $_POST['ngaycap'] ;
        $noicap = $_POST['noicap'] ;
        $sdt = $_POST['sdt'] ;
        $email = $_POST['email'] ;
        $hokhau = $_POST['hokhau'] ;
        $tinh = $_POST['tinh'] ;
        $huyen = $_POST['huyen'] ;
        $diachinhanthu = $_POST['diachinhanthu'] ;
        $bacdaotao = $_POST['bacdaotao'] ;
        $loaihinh = $_POST['loaihinh'] ;
        $nganh = $_POST['nganh'] ;
        $khuvucuutien = $_POST['khuvucuutien'] ;
        $doituonguutien = $_POST['doituonguutien'] ;
        $tinhlop10 = $_POST['tinhlop10'] ;
        $tinhlop11 = $_POST['tinhlop11'] ;
        $tinhlop12 = $_POST['tinhlop12'] ;
        $truonglop10 = $_POST['truonglop10'] ;
        $truonglop11 = $_POST['truonglop11'] ;
        $truonglop12 = $_POST['truonglop12'] ;
        $diem10 = $_POST['diem10'] ;
        $diem11 = $_POST['diem11'] ;
        $diem12 = $_POST['diem12'] ;
        $namtotnghiep = $_POST['namtotnghiep'] ;
        $diemxettuyen = $_POST['diemxettuyen'] ;
        $ghichu = $_POST['ghichu'] ;

        $sql = "INSERT INTO `hosocanhan`(`cmnd`, `hoten`, `gioitinh`, `ngaysinh`, `ngaycapcmnd`, `noicapcmnd`, `sdt`, `email`, `hokhau`, `tinh`, `huyen`, `diachinhanthu`)  VALUES ($cmnd,'$hoten','$gioitinh','$ngaysinh','$ngaycap','$noicap','$sdt','$email','$hokhau','$tinh','$huyen','$diachinhanthu') " ;
        // $sql = "INSERT INTO `hosocanhan`(`cmnd`, `hoten`, `gioitinh`, `ngaysinh`, `ngaycapcmnd`, `noicapcmnd`, `sdt`, `email`, `hokhau`, `tinh`, `huyen`, `diachinhanthu`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12]) " ;
        //echo $sql;
        $query = mysqli_query($db_connection, $sql);
        if ($db_connection->query($sql) === TRUE) {
            //echo "New record created successfully";
          } else {
            // echo "Error: " . $sql . "<br>" . $db_connection->error;
          }

        $sql = "INSERT INTO xethocba (cmnd, bacdaotao, loaihinh, nganh, khuvucuutien, doituonguutien, tinhlop10, tinhlop11, tinhlop12, truonglop10, truonglop11, truonglop12, diemtblop10, diemtblop11, diemtblop12, diemxettuyen, namtotnghiep, ghichu) VALUES ($cmnd,'$bacdaotao','$loaihinh','$nganh','$khuvucuutien','$doituonguutien','$tinhlop10','$tinhlop11','$tinhlop12','$truonglop10','$truonglop11','$truonglop12', '$diem10' , '$diem11' , '$diem12' , $diemxettuyen , '$namtotnghiep' ,'$ghichu')" ; 
         if ($db_connection->query($sql) === TRUE) {
            //echo "New record created successfully";
          } else {
            // echo "Error: " . $sql . "<br>" . $db_connection->error;
          }
        // echo "<script type='text/javascript'>alert('Đăng ký thành công !');</script>"; 
     
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>ĐĂNG KÝ XÉT HỌC BẠ</title>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts Google-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!--Css-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <!-- Header -->
    <?php include('app/include/header.php') ; ?>

    <!-- Middle Content-->
    <form action="" method="post">
    <div class="middle">
        <div class="content">
            <h5>ĐĂNG KÝ XÉT HỌC BẠ <br> (XÉT TỔNG ĐIỂM TB CÁC MÔN LỚP 10 + LỚP 11 + HỌC KỲ 1 LỚP 12)</h5>
        </div>

        <div class="main-content">
            <div class="table1">
                <div class="title1"> Thông tin hồ sơ cá nhân </div>
                <div class="tab1">
                    <table>
                        <tbody>
                            <tr>
                                <td>Họ tên</td>
                                <td> <input type="text" name="hoten" class="hoten"></td>
                                <td class="gioitinhtd">Giới tính </td>
                                <td class="namnutd">
                                    <input type="radio" name="gioitinh" class="gioitinh" value="Nam">
                                    <label for="">Nam</label>
    
                                    <input type="radio" name="gioitinh" class="gioitinh" value="Nữ">
                                    <label for="">Nữ</label>
                                </td>
                                <td class="ngaysinhtd">Ngày sinh</td>
                                <td><input type="date" class="ngaysinh" name="ngaysinh"></td>
                            </tr>
    
                            <tr>
                                <td>Số CMND/Số CCCD</td>
                                <td> <input type="text" name="cmnd" class="cmnd"></td>
                                <td class="ngaycaptd">Ngày cấp</td>
                                <td><input type="date" class="ngaycap" name="ngaycap"></td>
                                <td class="noicaptd">Nơi cấp</td>
                                <td><input type="text" name="noicap" class="noicap"></td>
                            </tr>
    
                            <tr>
                                <td>Số điện thoại</td>
                                <td> <input type="text" name="sdt" class="sdt"></td>
                                <td class="emailtd">Email</td>
                                <td><input type="text" name="email" class="email"></td>
                            </tr>
    
                            <tr>
                                <td>Hộ khẩu thường trú(xã, phường)</td>
                                <td> <input type="text" name="hokhau" class="hokhau"></td>
                                <td class="tinhtd">Tỉnh</td>
                                <td>
                                    <select name="tinh" id="tinhhuyen" style="width:100%">
                                        <option value="">--Chọn--</option>
                                        <?php
                                            $sql = "SELECT * FROM tinhhuyen";
                                            $result = $db_connection->query($sql);
                
                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                            echo "<option value='".$row['tentinh']."'data-data='".$row['idtinh']."' >".$row['tentinh']."</option>";
                                             }
                                            }
                                        ?>
                                    </select>
                                </td>
                                <td class="huyentd">Quận(Huyện)</td>
                                <td>
                                    <select name="huyen" class="tinh" id="huyen" style="width:100%">
                                        <option value="">--Chọn--</option>
                                    </select> 
                                </td>
                            </tr>
                            <tr>
                                <td>Địa chỉ nhận thư</td>
                                <td colspan="5">
                                    <input type="text" name="diachinhanthu">
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td colspan="5">(Ghi đủ 4 địa danh: số nhà, ngõ ngách, thôn - tổ, xã - phường, quận - huyện, tỉnh - thành phố)</td>
                            </tr>
                        </tbody>
                    </table>
                    </form>
                    
                </div>
            </div>

           <div class="table2">
               <div class="title2"> Thông tin đăng ký xét tuyển</div>
               <div class="tab2">
                   <table>
                       <tbody>      
                           <tr>
                               <td>Bậc đào tạo</td>
                               <td><select name="bacdaotao" class="bacdaotao">
                                   <option value="">--Chọn--</option>
                                   <option value="Đại học">Đại học</option>
                                  </select>
                            </td>
                            <td align="right">Loại hình</td>
                            <td><select name="loaihinh" id="loaihinh" style="width:100%">
                                <option value="">--Chọn--</option>
                                <?php
                                            $sql = "SELECT * FROM loaihinh";
                                            $result = $db_connection->query($sql);
                
                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                            echo "<option value='".$row['loaihinh']."'data-data='".$row['idloaihinh']."' >".$row['loaihinh']."</option>";
                                             }
                                            }
                                        ?>
                            </select>
                            </td>
                            <td align="right">Nghành</td>
                            <td><select name="nganh" id="nghanh" style="width:230px">
                                <option value="">--Chọn--</option>
                            </select>
                            </td>
                           </tr>

                        <tr>
                            <td>Khu vực ƯT</td>
                            <td><select name="khuvucuutien" class="khuvucuutien">
                                <option value="">--Chọn--</option>
                                <option value="Khu vực 01">Khu vực 01</option>
                                <option value="Khu vực 02">Khu vực 02</option>
                                <option value="Khu vực 03">Khu vực 03</option>
                               </select>
                         </td>
                         <td align="right">Đối tượng ƯT</td>
                         <td><select name="doituonguutien" style="width:100%">
                         <option value="">--Chọn--</option>
                                <option value="Dối tượng 01">Đối tượng 01</option>
                                <option value="Dối tượng 02">Đối tượng 02</option>
                                <option value="Dối tượng 03">Đối tượng 03</option>
                                <option value="Dối tượng 04">Đối tượng 04</option>
                                <option value="Dối tượng 05">Đối tượng 05</option>
                                <option value="Dối tượng 06">Đối tượng 06</option>
                                <option value="Dối tượng 07">Đối tượng 07</option>
                                <option value="Không">Không</option>
                        </select>
                        </td>
                        </tr>

                        <tr>
                            <td><span>Tên tỉnh</span></td>
                                            <td class="tinhlp10td" align="right">Tỉnh lớp 10</td>
                                            <td class="tinhlp10sel"><select name="tinhlop10" id="tinhlop10" style="width:100%;">
                                                <option value="">--Chọn--</option>
                                                <?php
                                                            $sql = "SELECT * FROM tinhlop";
                                                            $result = $db_connection->query($sql);
                                                            if ($result->num_rows > 0) {
                                                            // output data of each row
                                                            while($row = $result->fetch_assoc()) {
                                                            echo "<option value='".$row['tinh']."'data-data='".$row['idtinhlop']."' >".$row['tinh']."</option>";
                                                            }
                                                        }
                                                ?>
                                            </select></td>
                            <td class="tinhlp11td" align="right">Tỉnh lớp 11</td>
                            <td><select name="tinhlop11" id="tinhlop11">
                                <option value="">--Chọn--</option>
                                <?php
                                            $sql = "SELECT * FROM tinhlop";
                                            $result = $db_connection->query($sql);
                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                            echo "<option value='".$row['tinh']."'data-data='".$row['idtinhlop']."' >".$row['tinh']."</option>";
                                             }
                                            }
                                ?>
                            </select></td>
                            <td align="right">Tỉnh lớp 12</td>
                            <td class="tinhlp12td"><select name="tinhlop12" id="tinhlop12">
                                <option value="">--Chọn--</option>
                                <?php
                                            $sql = "SELECT * FROM tinhlop";
                                            $result = $db_connection->query($sql);
                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                            echo "<option value='".$row['tinh']."'data-data='".$row['idtinhlop']."' >".$row['tinh']."</option>";
                                             }
                                            }
                                ?>
                            </select></td>
                        </tr>

                        <tr>
                            <td>Tên trường THPT</td>
                            <td align="right">Lớp 10</td>
                            <td class="truonglop10td"><select name="truonglop10" class="truonglop10" id="tinhtruong10">
                                <option value="">--Chọn--</option>
                            </select></td>
                            <td class="truonglop11td" align="right">Lớp 11</td>
                            <td><select name="truonglop11" class="truonglop11" id="tinhtruong11">
                                <option value="">--Chọn--</option>
                            </select></td>
                            <td class="truonglop12td" align="right">Lớp 12</td>
                            <td><select name="truonglop12" class="truonglop12" id="tinhtruong12">
                                <option value="">--Chọn--</option>
                            </select></td>
                        </tr>
                        
                        <tr>
                            <td>Điểm TB các môn</td>
                            <td align="right">Lớp 10</td>
                            <td><input type="text" name="diem10" class="diem10"></td>
                            <td align="right">Lớp 11</td>
                            <td><input type="text" name="diem11" class="diem11"></td>
                            <td align="right">Lớp 12</td>
                            <td><input type="text" name="diem12" class="diem12"></td>
                        </tr>
                        <tr>
                            <td>Năm tốt nghiệp THPT</td>
                            <td><input type="text" class="namtotnghiep" name="namtotnghiep"></td>
                            <td align="right">Điểm xét tuyển</td>
                            <td><input type="text" class="diemxettuyen" name="diemxettuyen"></td>
                        </tr>
                        <tr >
                            <td>Ghi chú</td>
                            <td colspan="6"><input type="text" class="ghichu" id="ghichu" name="ghichu" style="width: 100%;"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="5"></td>
                        </tr>
                       </tbody>
                   </table>
                   
                   
               </div>
           </div>
            </div class="btndangky">
                <p> <input type="submit" class="btndky" value="ĐĂNG KÝ"> </p>
            </div> 
        </div>
    </div>
    </form>
    

    <!--Footer -->
    <?php include('app/include/footer.php') ; ?>

    
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/ajax.js"></script>
  </body>
</html>