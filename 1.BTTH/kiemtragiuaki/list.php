<?php 
    include('database/config.php');
    
    $sql = "SELECT * FROM lophoc";
    $query = mysqli_query($conn, $sql);
    
    
    
    
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">



</head>
  <body>
      <div class="container">
          <h1>Danh sách lớp học</h1>
          <div class="list">
          <table>
          <thead>
          <tr>
          <th></th>
          <th></th>
          </tr>
          </thead>
          
          <tbody>
          
          </tbody>
          </table>
             <table class='table'>
                     <thead class='thead-dark'> 
                         <tr>
                            <th>Mã lớp</th>
                            <th>Tên lớp học</th> 
                            <th>Giáo viên</th> 
                            <th>Lịch học</th> 
                            <th>Học phí</th>  
                            <th>Tác vụ</th> 
                        </tr>
                    </thead>
                 <tbody> 
                <?php while($row = mysqli_fetch_assoc($query)) {?>
                            <tr> 
                             <td> <?php echo $row['id']; ?></td>
                             <td> <?php echo $row['tenlophoc'] ;?></td>
                             <td> <?php echo $row['giaovien'] ;?> </td>
                             <td> Từ <?php echo $row['lichhoc'] ;?>Thứ 2,4,6 </td></td>
                             <td> <?php echo $row['hocphi'] ;?> $ </td>
                             <!-- <td> </td>
                             <td> </td>
                             <td> </td> -->
                             <td>
                                 <a href="delete.php?id=<?php echo $row['id'];?>" onclick="if (!confirm('Bạn có chắc chắn muốn xóa bản ghi này không?')) { return false }" ><i class="fas fa-trash"></i></a>
                                 <a href="edit.php?id=<?php echo $row['id'];?>" ><i class="fas fa-edit"></i></a>
                            </td>               
                        </tr>
                        <?php
                    }
                    ?>
                 </tbody> 
          </table>
          </div>            
            <div class="dslop">
                <button class="add"> <a href="create.php"> <h5>+Thêm mới lớp học</h5></a></button>
            </div>

      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  
</html>