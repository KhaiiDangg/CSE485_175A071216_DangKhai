<?php
    include("database/config.php");

    if($_POST){
        $id = $_POST['id'];
        $tenlophoc = $_POST['tenlophoc'];
        $giaovien = $_POST['giaovien'];
        $lichhoc = $_POST['lichhoc'];
        $hocphi = $_POST['hocphi'];
        $ngaybatdau = $_POST['ngaybatdau'];
        $ngayketthuc = $_POST['ngayketthuc'];
        $phonghoc = $_POST['phonghoc'];

        $sql = "UPDATE lophoc SET tenlophoc = '$tenlophoc', giaovien = '$giaovien', lichhoc = '$lichhoc', hocphi = $hocphi, ngaybatdau = '$ngaybatdau', ngayketthuc = '$ngayketthuc',  phonghoc = $phonghoc WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        if ($query===true) {
            echo "<script type='text/javascript'>alert('Sửa thông tin thành công');</script>";
            // header("Location:list.php");        
        } else {
            echo "<script type='text/javascript'>alert('Sửa thông tin không thành công');</script>";
        }
        header("Location:list.php");
        
    }       
    //$conn->close();   
?>