<?php
    include("database/config.php");
    $class_id = $_GET['id'];

    $sql = "DELETE FROM lophoc WHERE id = '$class_id'";
    $query = mysqli_query($conn, $sql);
    header("Location:list.php") ;
    // echo "<script type='text/javascript'>alert('Xóa thành công !');</script>";


    mysqli_close($conn);
?>