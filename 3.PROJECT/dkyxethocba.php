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
    <div class="middle">
        <div class="content">
            <h5>ĐĂNG KÝ XÉT HỌC BẠ <br> (XÉT TỔNG ĐIỂM TB CÁC MÔN LỚP 10 + LỚP 11 + HỌC KỲ 1 LỚP 12)</h5>
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
                                    <input type="radio" name="gioitinh" class="gioitinh" value="false">
                                    <label for="">Nam</label>
    
                                    <input type="radio" name="gioitinh" class="gioitinh" value="false">
                                    <label for="">Nữ</label>
                                </td>
                                <td class="ngaysinhtd">Ngày sinh</td>
                                <td><input type="date" class="ngaysinh"></td>
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
                                    <select name="tinh" id="" style="width:100%">
                                        <option value="">--Chọn--</option>
                                    </select>
                                </td>
                                <td class="huyentd">Huyện</td>
                                <td>
                                    <select name="huyen" class="tinh" style="width:100%">
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
                   <table>
                       <tbody>
                           <tr>
                               <td>Bậc đào tạo</td>
                               <td><select name="bacdaotao" class="bacdaotao">
                                   <option value="">--Chọn--</option>
                                   <option value="">Đại học</option>
                                  </select>
                            </td>
                            <td align="right">Loại hình</td>
                            <td><select name="loaihinh" id="" style="width:100%">
                                <option value="">--Chọn--</option>
                            </select>
                            </td>
                            <td align="right">Nghành</td>
                            <td><select name="" id="" style="width:100%">
                                <option value="">--Chọn--</option>
                            </select>
                            </td>
                           </tr>

                        <tr>
                            <td>Khu vực ƯT</td>
                            <td><select name="kvut" class="kvut">
                                <option value="">--Chọn--</option>
                                <option value="">Đại học</option>
                               </select>
                         </td>
                         <td align="right">Đối tượng ƯT</td>
                         <td><select name="doituongut" style="width:100%">
                            <option value="">--Chọn--</option>
                        </select>
                        </td>
                        </tr>

                        <tr>
                            <td><span>Tên tỉnh</span></td>
                            <td class="tinhlp10td" align="right">Tỉnh lớp 10</td>
                            <td class="tinhlp10sel"><select name="tinhlp10" class="tinhlp10">
                                <option value="">--Chọn--</option>
                            </select></td>
                            <td class="tinhlp11td" align="right">Tỉnh lớp 11</td>
                            <td><select name="tinhlp11" class="tinhlp11">
                                <option value="">--Chọn--</option>
                            </select></td>
                            <td>Tỉnh lớp 12</td>
                            <td class="tinhlp12td"><select name="tinhlp12" class="tinhlp12">
                                <option value="">--Chọn--</option>
                            </select></td>
                        </tr>

                        <tr>
                            <td>Tên trường THPT</td>
                            <td align="right">Lớp 10</td>
                            <td class="truonglop10td"><select name="truonglop10" class="truonglop10">
                                <option value="">--Chọn--</option>
                            </select></td>
                            <td class="truonglop11td" align="right">Lớp 11</td>
                            <td><select name="truonglop11" class="truonglop11">
                                <option value="">--Chọn--</option>
                            </select></td>
                            <td class="truonglop12td" align="right">Lớp 12</td>
                            <td><select name="truonglop12" class="truonglop12">
                                <option value="">--Chọn--</option>
                            </select></td>
                        </tr>
                        
                        <tr>
                            <td>Điểm TB các môn</td>
                            <td align="right">Lớp 10</td>
                            <td><input type="text" class="diem10"></td>
                            <td align="right">Lớp 11</td>
                            <td><input type="text" class="diem11"></td>
                            <td align="right">Lớp 12</td>
                            <td><input type="text" class="diem12"></td>
                        </tr>
                        <tr>
                            <td>Năm tốt nghiệp THPT</td>
                            <td><input type="text" class="namtotnghiep"></td>
                            <td align="right">Điểm xét tuyển</td>
                            <td><input type="text" class="diemxettuyen"></td>
                        </tr>
                        <tr >
                            <td>Ghi chú</td>
                            <td colspan="6"><input type="text" class="ghichu" id="ghichu" style="width: 100%;"></td>
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

    <!--Footer -->
    <?php include('app/include/footer.php') ; ?>

    
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>