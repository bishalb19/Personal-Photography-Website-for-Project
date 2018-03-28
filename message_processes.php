<?php

include("connect.php");

$name=$_POST['m_name'];
$message=$_POST['m_message'];


$sql="insert into message values('',$name,'$message')";
mysql_query($sql) or die ("could not insert valuse");
header("location:messages.php")
?>