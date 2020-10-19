<?php 
    include('database/config.php');
    if($_POST) {

    $id = $_POST['id'] ;
    $tenlophoc = $_POST['tenlophoc'];
    $giaovien = $_POST['giaovien'];
    $lichhoc = $_POST['lichhoc'];
    $hocphi = $_POST['hocphi'];
    $ngaybatdau = $_POST['ngaybatdau'];
    $ngayketthuc = $_POST['ngayketthuc'];
    $phonghoc = $_POST['phonghoc'];

    $sql="INSERT INTO lophoc(id,tenlophoc,giaovien,lichhoc,hocphi,ngaybatdau,ngayketthuc,phonghoc) VALUE($id,'$tenlophoc','$giaovien','$lichhoc', $hocphi ,'$ngaybatdau','$ngayketthuc',$phonghoc)";
    $query = mysqli_query($conn, $sql); 
    
      echo "<script type='text/javascript'>alert('Thêm vào thành công !');</script>"; 
    }    
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <h1>Thêm mới lớp học</h1>
  <div class="container">
  <form action="create.php" method="post">
      <label for="id">Mã lớp học</label> 
      <input type="text" name="id"> <br>

      <label for="">Tên lớp học</label> 
      <input type="text" name="tenlophoc"> <br>

      <label for="gv">Giáo viên chủ nhiệm</label>
        <select id="giaovien" name="giaovien">
            <option value="">--Chọn giáo viên--</option>
            <option value="Phan Thanh Bình">Phan Thanh Bình</option>
            <option value="Phan Thanh Duy">Phan Thanh Duy</option>
            <option value="Nguyễn Ngọc Dương">Nguyễn Ngọc Dương</option>
        </select> <br>

      <label for="">Lịch học</label> 
      <input type="text" name="lichhoc"> <br>

      <label for="Học phí">Học phí</label> 
      <input type="text" name="hocphi"> <br>

      <label for="">Ngày bắt đầu</label> 
      <input type="date" name="ngaybatdau"> <br>

      <label for="">Ngày kết thúc</label> 
      <input type="date" name="ngayketthuc"> <br>

      <label for="">Phòng học</label> 
      <input type="text" name="phonghoc"> <br> <br>

      <input type="submit" value="Lưu lại" class="save">
      <input type="submit" value="Reset" class="reset">
      </form>
  </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>