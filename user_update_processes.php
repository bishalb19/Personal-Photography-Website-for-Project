<?php

include("connect.php");

$id=$_GET['id'];
$name=$_POST['u_name'];
$email=$_POST['u_email'];
$password=$_POST['u_password'];

$sql="update user set user_name='$name',email='$email',password='$password' where user_id=$id";
mysql_query($sql) or die ("Could not update");
header("location:users.php");

?>