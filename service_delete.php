<?php

include("connect.php");
$id=$_GET['id'];
$sql="delete from service where service_id=$id";
mysql_query($sql) or die ("could not delete");
header("location:services.php");


?>