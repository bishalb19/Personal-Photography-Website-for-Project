<?php
include("connect.php");
$id=$_GET['id'];
$sql="delete from user where user_id=$id ";
mysql_query($sql) or die("could not delete");
header("location:users.php");




?>