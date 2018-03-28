<?php

include("connect.php");

$id=$_GET['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="update admin set admin_name='$name',email='$email',password='$password' where admin_id=$id";
mysql_query($sql) or die ("Could not update");
header("location:admins.php");

?>