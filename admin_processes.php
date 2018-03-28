<?php

include("connect.php");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql="insert into admin values('','$name','$email','$password')";
mysql_query($sql) or die ("could not insert valuse");
header("location:admins.php")
?>