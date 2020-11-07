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
  <?php include('app/include/header.php') ; ?>
       <!-- Middle Content-->
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
                                <td class="huyentd">Quận(Huyện)</td>
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
                <table style="width: 100%;" id="tblThongTinHoSo">
                    <tbody><tr>
                        <td style="width: 185px;">Bậc đào tạo</td>
                        <td>
                            <input  type="radio" name="daihoc" value="true" class="dhocradio"><label for="">Đại học</label>
                            <input  type="radio" name="caodang" value="false" style="margin-left: 10px;"><label for="">Cao đẳng</label>
                        </td>
                        <td>Nghành</td>
                        <td colspan="3">
                            <select name="nganh" style="width: 85px;">
                                <option value="">--Chọn--</option>
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
                            </select>
                        </td>
    
                        <td class="kvuttd">Khu vực ƯT</td>
                        <td style="width:100px">
                            <select name="kvut"style="width: 85px;" >
                                <option value="">--Chọn--</option>
                            </select>
                        </td>
                        <td class ="doituonguttd" align="right">Đối tượng ƯT
                        </td>
                        <td class="doituonguttdsel">
                            <select name="doituongut">
                                <option value="">--Chọn--</option>
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
                                        <input name="diemmon1" type="text"  tabindex="21" class="txt_diem" style="width:50px;text-align:center">

                                    </td>
                                    <td width="117px"><div style="padding-left: 50px;" id="DiemMon2">Môn 2</div></td>
                                    <td align="right">
                                        <input name="diemmon2" type="text"  tabindex="21" class="txt_diem" style="width:50px;text-align: center">

                                    </td>
                                    <td width="117px"><div style="padding-left: 50px;" id="DiemMon3">Môn 3</div></td>
                                    <td align="right">
                                        <input name="diemmon3" type="text"  tabindex="21" class="txt_diem" style="width:50px;text-align: center">
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>                    
                        <td align="left" style="width: 100px">Tổng điểm</td>
                        <td>
                            <input name="tongdiem" type="text" class="tongdiem" disabled="disabled" tabindex="21" style="width:98%;text-align: center">
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
    <?php include('app/include/footer.php') ; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>