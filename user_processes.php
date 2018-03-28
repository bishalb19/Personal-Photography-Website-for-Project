<?php

include("connect.php");

$name=$_POST['u_name'];
$email=$_POST['u_email'];
$password=$_POST['u_password'];


$sql="insert into user values('','$name','$email','$password')";
mysql_query($sql) or die ("could not insert valuse");
header("location:users.php")
?>