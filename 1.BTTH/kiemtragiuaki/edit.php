<?php 
    include('database/config.php');
    
    $class_id = $_GET['id'];
    
    $sql = "SELECT * FROM lophoc WHERE id ='$class_id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    
    
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>


    <h1>Sửa thông tin lớp học</h1>
    <div class="container">
      <form method="POST" action="xuliedit.php">
      <label for="id">Mã lớp học</label> 
      <input type="text"  name="id" value="<?php echo $row['id'] ;?>"> <br>

      <label for="Name">Tên lớp học</label> 
        <input type="text" class="name" name="tenlophoc" value="<?php echo $row['tenlophoc'] ; ?>"> 
        <br>
        
        <label for="gv">Giáo viên chủ nhiệm</label>
        <select id="giaovien" name="giaovien">
            <option value="<?php echo $row['giaovien'];?>"></option>
            <option value="Phan Thanh Bình">Phan Thanh Bình</option>
            <option value="Phan Thanh Duy">Phan Thanh Duy</option>
            <option value="Nguyễn Ngọc Dương">Nguyễn Ngọc Dương</option> 
        </select> <br>
        
        <label for="lich">Lịch học</label> 
        <input type="text" name="lichhoc" value="<?php echo $row['lichhoc'];?>"  > <br>
        
        <label for="hocphi">Học phí</label> 
        <input type="text" name="hocphi"  value="<?php echo $row['hocphi'];?>" > <br>
        
        <label for="ngaybatdau">Ngày bắt đầu</label>  
        <input type="date" name="ngaybatdau" value="<?php echo $row['ngaybatdau'] ; ?>"> <br>

        <label for="ngayketthuc">Ngày kết thúc</label> 
        <input type="date" name="ngayketthuc" value="<?php echo $row['ngayketthuc'] ; ?>"> <br>
        
        <label for="phong">Phòng học</label> 
        <input type="text" name="phonghoc" value="<?php echo $row['phonghoc'] ; ?>"> <br>

        <input type="submit" value="Save" class="save">
        <input  type="button" value="Reset" class="reset">
      </form>
    </div>




  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>