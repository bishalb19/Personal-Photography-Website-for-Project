<?php

include("connect.php");
$id=$_GET['id'];
$sql="delete from upload where upload_id=$id";
mysql_query($sql) or die ("could not delete");
header("location:uploads.php");


?>