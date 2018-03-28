<?php
 
 include("connect.php");
 
 $name=$_POST['c_name'];
 $caption=$_POST['c_caption'];
 $price=$_POST['c_price'];
 $y_n=$_POST['y_n'];
 $file=$_FILES['fupload']['tmp_name'];
 if(!isset($file))
	 echo "Please select an image";
 else{
	 $image=addslashes(file_get_contents($_FILES['fupload']['tmp_name']));
	 
	 $image_name=addslashes($_FILES['fupload']['name']);
	 $image_size=getimagesize($_FILES['fupload']['tmp_name']);
	 
	 if($image_size==FALSE)
		 echo"Thats not an image.";
	 else{
		 if(mysql_query("insert into upload values('',$name,'$caption',$price,'$y_n','$image_name')"))
		 {
			 $id=mysql_insert_id();
			move_uploaded_file($_FILES['fupload']['tmp_name'],'upload/'.$id.$image_name);
            
		 }
		 else
		 {
			 echo"could not insert value";
		 }
	 }
 }   
header("location:uploads.php")
?>