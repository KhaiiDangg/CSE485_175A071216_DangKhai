<?php
include('app/database/config.php') ;

$id = $_POST['id'];
$sql = "SELECT * FROM `tinhtruong` WHERE `idtinhlop`=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    
    echo "<option value='".$row['truong']."' >".$row['truong']."</option>";
  }
}
?>
