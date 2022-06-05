<?php

$sname=$_POST['sname'];
$email=$_POST['email'];
$password=$_POST['password'];
$room=$_POST['room'];
$tel=$_POST['tel'];
$adm=$_POST['adm'];

include 'connect.php';
mysqli_query($conn,"insert into input(sname,email,password,room,tel,adm) values('$sname','$email','$password','$room','$tel','$adm')");
echo'<script>location.replace("index.html");</script>';

?>