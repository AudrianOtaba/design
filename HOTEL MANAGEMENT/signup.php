<?php

$email=$_POST['email'];
$psw=$_POST['password'];
$rpassword=$_POST['rpassword'];

include 'connect.php';
mysqli_query($conn,"insert into signup(email,password,rpassword) values('$email','$password','$rpassword')");
echo'<script>location.replace("index.html");</script>';

?>