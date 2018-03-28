<?php 

include("header.php");
include("connect.php");
$id=$_GET['id'];
$sql="select category_name,caption,price,sell,image from upload as u join category_g as c on (u.category_id=c.category_id) where upload_id=$id";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
	{
     $c_name=$row['category_name'];
     $caption=$row['caption'];
     $price=$row['price'];
	 $sell=$row['sell'];
     

	}

?>


       <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-6">

                    <form role="form" action="<?php echo "upload_update_processes.php?id=$id";  ?>" method="POST">

                      <div class="form-group">
                            <label>Category Name</label>
                            <select name= "c_name" class="form-control" value="<?php echo $c_name;  ?>">
							
							<?php
							include("connect.php");
							$sql="select * from category_g";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result))
							{
							 echo "<option value='".$row['category_id']."'>".$row['category_name']."</option>";
                             	
							}
							?>
							
                               
                                
                            </select>
                        </div>
                        

                        <div class="form-group">
                            <label>Caption</label>
                            <input type="text" name="c_caption" class="form-control" value="<?php echo $caption; ?>">
                        </div>
						<div class="form-group">
                            <label>Price</label>
                            <input type="text" name="c_price" class="form-control" value="<?php echo $price;  ?>">
                        </div>
						<div class="form-group">
                            <label>Availability</label>
                            <select name="y_n" class="form-control" value="<?php echo $sell;  ?>">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                                
                            </select>
                        </div>
						<div class="form-group">
                            <label>Upload Image</label>
                            <input type="file" name="fupload" value="<?php echo $image;  ?>">
                        </div>
						


                        <button type="submit" class="btn btn-default">Update</button>
                        <button type="reset" class="btn btn-default">Reset</button>
						<a  href="admins.php" class="btn btn-default">View</a>

                    </form>

                </div>
            
            </div>
        </div>
    </div>    

</body>
</html>
