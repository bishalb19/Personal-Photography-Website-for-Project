<?php

include("connect.php");

$name=$_POST['p_name'];
$offer=$_POST['p_offer'];
$price=$_POST['p_price'];


$sql="insert into service values('','$name','$offer',$price)";
mysql_query($sql) or die ("could not insert valuse");
header("location:services.php")
?>