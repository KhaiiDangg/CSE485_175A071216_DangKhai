<?php
include('app/database/config.php') ;

$id = $_POST['id'];
$sql = "SELECT * FROM `nghanh` WHERE `idloaihinh`=$id";
$result = $db_connection->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    
    echo "<option value='".$row['nganh']."' >".$row['nganh']."</option>";
  }
}
?>
