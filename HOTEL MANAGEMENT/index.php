<?php
include 'connect.php';
$sname = $_POST['sname'];
$password = $_POST['password'];
$result = mysqli_query($conn,"select* from input where sname='$sname' and password='$password'");
$check =mysqli_fetch_array($result,MYSQLI_NUM);
if($check){
    echo'<script>location.replace("students.html");</script>';
    mysqli_close($conn);
    exit;
}
else{
    mysqli_close($conn);
    echo '<script> location.replace("index.html");</script>';
}
?>