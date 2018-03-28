<?php

include("connect.php");

 $id=$_GET['id'];
 $name=$_POST['c_name'];
 $caption=$_POST['c_caption'];
 $price=$_POST['c_price'];
 $y_n=$_POST['y_n'];
 
 
$sql="update upload set category_id='$name',caption='$caption',price='$price',sell='$y_n' where upload_id=$id";
mysql_query($sql) or die ("Could not update");
header("location:uploads.php");

?>