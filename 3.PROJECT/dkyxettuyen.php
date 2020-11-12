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
        $nganh = $_POST['nganh'] ;
        $tohop = $_POST['tohop'] ;
        $kvut = $_POST['kvut'] ;
        $doituongut = $_POST['doituongut'] ;
        $diemmon1 = $_POST['diemmon1'] ;
        $diemmon2 = $_POST['diemmon2'] ;
        $diemmon3 = $_POST['diemmon3'] ;
        $tongdiem = $_POST['tongdiem'] ;
        $ghichu = $_POST['ghichu'] ;

        $sql = "INSERT INTO hosocanhan (cmnd, hoten, gioitinh, ngaysinh, ngaycapcmnd, noicapcmnd, sdt, email, hokhau, tinh, huyen, diachinhanthu) VALUES ($cmnd,'$hoten','$gioitinh','$ngaysinh','$ngaycap','$noicap','$sdt','$email','$hokhau','$tinh','$huyen','$diachinhanthu') " ;
        $query = mysqli_query($db_connection, $sql);
        if ($db_connection->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $db_connection->error;
          }

        $sql = "INSERT INTO xetdiemthi (cmnd, bacdaotao, nganh, tohopmon, khuvucuutien, doituonguutien, diemmon1, diemmon2, diemmon3, tongdiem, ghichu) VALUES ($cmnd ,'$bacdaotao','$nganh','$tohop','$kvut','$doituongut','$diemmon1','$diemmon2','$diemmon3','$tongdiem','$ghichu')";
        if ($db_connection->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $db_connection->error;
          }

    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>ĐĂNG KÝ XÉT TUYỂN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <!--Header -->
        <?php include('app/include/header.php') ; ?>
       
     <!-- Middle Content-->
       <form action="" method="post">
       <div class="middle">
        <div class="content">
            <h5>ĐĂNG KÝ XÉT TUYỂN <br> (THEO KẾT QUẢ THI TỐT NGHIỆP THPT)</h5>
        </div>

        <div class="main-content">
            <div class="table1">
                <div class="title1"> Thông tin hồ sơ cá nhân</div>
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
                </div>
            </div>

           <div class="table2">
               <div class="title2"> Thông tin đăng ký xét tuyển</div>
               <div class="tab2">
                <table style="width: 100%;" id="tblThongTinHoSo">
                    <tbody><tr>
                        <td style="width: 185px;">Bậc đào tạo</td>
                        <td>
                            <input  type="radio" name="bacdaotao" value="Đại học" class="dhocradio"> <label for=""> Đại học </label>
                            <!-- <input  type="radio" name="caodang" value="false" style="margin-left: 10px;"><label for="">Cao đẳng</label> -->
                        </td>
                        <td>Nghành</td>
                        <td colspan="3">
                            <select name="nganh" style="width: 85px;">
                                <option value="">--Chọn--</option>
                                <option value="TLA201 : Kỹ thuật xây dựng">TLA201 : Kỹ thuật xây dựng</option>
                                <option value="TLA202 : Kỹ thuật tài nguyên nước">TLA202 : Kỹ thuật tài nguyên nước</option>
                                <option value="TLA203 : Kỹ thuật xây dựng công trình thủy">TLA203 : Kỹ thuật xây dựng công trình thủy</option>
                                <option value="TLA204 : Quản trị kinh doanh">TLA204 : Quản trị kinh doanh</option>
                                <option value="TLA205 : Công nghệ kỹ thuật xây dựng">TLA205 : Công nghệ kỹ thuật xây dựng</option>
                                <option value="TLA206 : Kỹ thuật xây dựng công trình giao thông">TLA206 : Kỹ thuật xây dựng công trình giao thông</option>
                                <option value="TLA207 : Kỹ thuật cấp thoát nước">TLA207 : Kỹ thuật cấp thoát nước</option>
                                <option value="TLA208 : Công nghệ thông tin">TLA208 : Công nghệ thông tin</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6"></td>
                    </tr>
                    <tr>
                        <td style="width:250px">Tổ hợp môn đăng ký xét tuyển </td>
                        <td>
                            <select name="tohop" style="width:535px">
                                <option value="">--Chọn--</option>
                                <option value="A00: Toán, Vật Lý , Hóa học">A00: Toán, Vật Lý , Hóa học</option>
                                <option value="A01: Toán , Vật Lý , Tiếng Anh">A01: Toán , Vật Lý , Tiếng Anh</option>
                                <option value="A02: Toán , Vật Lý , Sinh học">A02: Toán , Vật Lý , Sinh học</option>
                                <option value="B00: Toán , Hóa học , Sinh học">B00: Toán , Hóa học , Sinh học</option>
                                <option value="D01: Toán , Ngữ Văn , Tiếng Anh">D01: Toán , Ngữ Văn , Tiếng Anh</option>
                                <option value="D07: Toán , Hóa học , Tiếng Anh">D07: Toán , Hóa học , Tiếng Anh</option>
                                <option value="D08: Toán , Sinh học , Tiếng Anh">D08: Toán , Sinh học , Tiếng Anh</option> 
                            </select>
                        </td>
    
                        <td class="kvuttd">Khu vực ƯT</td>
                        <td style="width:100px">
                            <select name="kvut"style="width: 85px;" >
                                <option value="">--Chọn--</option>
                                <option value="Khu vực 01">Khu vực 01</option>
                                <option value="Khu vực 02">Khu vực 02</option>
                                <option value="Khu vực 03">Khu vực 03</option>
                            </select>
                        </td>
                        <td class ="doituonguttd" align="right">Đối tượng ƯT
                        </td>
                        <td class="doituonguttdsel">
                            <select name="doituongut">
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
                        <td colspan="6"></td>
                    </tr>
                    <tr>
                        <td>Điểm thi</td>
                        <td align="center" style="width: 100px">
                            <table>
                                <tbody><tr>
                                    <td align="center" width="83px">Môn 1</td>
                                    <td align="right"> 
                                        <input name="diemmon1" type="text" class="txt_diem" id="diem1" style="width:50px;text-align:center">

                                    </td>
                                    <td width="117px"><div style="padding-left: 50px;" id="DiemMon2">Môn 2</div></td>
                                    <td align="right">
                                        <input name="diemmon2" type="text" class="txt_diem" id="diem2" style="width:50px;text-align: center">

                                    </td>
                                    <td width="117px"><div style="padding-left: 50px;" id="DiemMon3">Môn 3</div></td>
                                    <td align="right">
                                        <input name="diemmon3" type="text" class="txt_diem" id="diem3" style="width:50px;text-align: center">
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>                    
                        <td align="left" style="width: 100px">Tổng điểm</td>
                        <td>
                            <input name="tongdiem" type="text" class="tongdiem" id="tong"   style="width:98%;">
                        </td>                    
                    </tr>
                    <tr>
                        <td colspan="6"></td>
                    </tr>
                    <tr>
                        <td> Ghi chú </td>
                        <td colspan="6"> <input name="ghichu" type="text" class="ghichu" style="width: 945px;"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td colspan="5"></td>
                    </tr>
                </tbody>
            </table>
               </div>
           </div class="btndangky">
            <p> <input type="submit" class="btndky" value="ĐĂNG KÝ"> </p>
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