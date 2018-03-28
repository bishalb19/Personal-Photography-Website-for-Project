<?php

include("connect.php");
$id=$_GET['id'];
$sql="delete from category_g where category_id=$id";
mysql_query($sql) or die ("could not delete");
header("location:categorys.php");


?>