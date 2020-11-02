<?php
   include("database/config.php");
    
    if(isset($_POST['id'])){
        $id = $_POST['id'];
       
        $sql= "SELECT * FROM `nhannvien` WHERE `id`=$id";
        $result = mysqli_query($conn,$sql);

        while( $row = mysqli_fetch_array($result) ){
           $id = $row['id'];
           $tennhanvien = $row['tennhanvien'];
           $diachi = $row['diachi'];
           $gioitinh = $row['gioitinh'];
           $designation = $row['designation'];
           $tuoi = $row['tuoi'];
     
           $users_arr[] = array("id" => $id, "tennhanvien" => $tennhanvien,"diachi" => $diachi ,"gioitinh" => $gioitinh,"designation" => $designation,"tuoi" => $tuoi);

        }
       
        echo json_encode($users_arr);
     
    }


   ?>
