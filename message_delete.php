<?php

include("connect.php");
$id=$_GET['id'];
$sql="delete from message where message_id=$id";
mysql_query($sql) or die ("could not delete");
header("location:messages.php");


?>