
<?php 
// error_reporting(E_ERROR);
session_start();
if(isset($_SESSION['email'])){
    echo "dsadas";
}
else{
    header('Location: ../trangchu.php');

} ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="refresh" content="0;url=dist/index.html">
    <title>SB Admin</title>
    <script language="javascript">
        window.location.href = "dist/index.php"
    </script>
</head>

<body>
    Go to <a href="dist/index.php">/dist/index.html</a>
</body>

</html>
