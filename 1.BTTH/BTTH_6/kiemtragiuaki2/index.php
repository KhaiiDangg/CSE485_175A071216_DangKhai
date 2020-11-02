<?php
   include("database/config.php");
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
  </head>
  <body>
<div class="container">
<h5>Search Employee Data</h5>   
<div class="form-group">
 
  <select class="form-control" name="" id="nv">

  <?php
       $sql = "SELECT * FROM nhannvien";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
           echo "<option value='".$row['id']."'>".$row['tennhanvien']."</option>";
         }
       } 
        $conn->close();
            ?>

  </select>
  <br>
  <button type="button" id="search" class="btn btn-dark">Search</button>
</div>   
    
<table id="table">
    <tbody>
        <tr>
            <th >Name</th>
            <td  id="ten"></td>
        </tr>
        <tr>
            <th >Address</th>
            <td  id="dc"></td>
        </tr>
        <tr>
            <th >Gender</th>
            <td  id="gt"></td>
        </tr>
        <tr>
            <th >Designation</th>
            <td  id="desi"></td>
        </tr>
        <tr>
            <th >Age</th>
            <td  id="tuoi"></td>
        </tr>
    </tbody>
</table>


</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/search.js"></script>
  </body>
</html>