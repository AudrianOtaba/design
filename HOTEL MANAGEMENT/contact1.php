<?php


$sname= trim($_POST['sname']);
$email= trim($_POST['email']);
$comments= trim($_POST['comments']);

include 'connect.php';
mysqli_query($conn,"insert into contact(sname,email,comments) values ('$sname','$email','$comments')");
?>




