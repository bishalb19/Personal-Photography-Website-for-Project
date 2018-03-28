<?php

include ("connect.php");

$name=$_POST['c_name'];
$sql="insert into category_g values('','$name')";
mysql_query($sql) or die ("could not insert values");
header("location:categorys.php")

?>