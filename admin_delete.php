<?php
include("connect.php");
$id=$_GET['id'];
$sql="delete from admin where admin_id=$id ";
mysql_query($sql) or die("could not delete");
header("location:admins.php");




?>