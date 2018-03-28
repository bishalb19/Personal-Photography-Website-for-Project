<?php 

include("header.php");


?>
       <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-4">

                    <form role="form" enctype="multipart/form-data" action="upload_processes.php" method="POST">

					 <div class="form-group">
                            <label>Category Name</label>
                            <select name= "c_name" class="form-control">
							
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
                            <input type="text" name="c_caption" class="form-control" placeholder="Enter text" required="">
                        </div>
						<div class="form-group">
                            <label>Price</label>
                            <input type="text" name="c_price" class="form-control" placeholder="Enter text" required="">
                        </div>
						<div class="form-group">
                            <label>Availability</label>
                            <select name="y_n" class="form-control" required="">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                                
                            </select>
                        </div>
						<div class="form-group">
                            <label>Upload Image</label>
                            <input type="file" name="fupload">
                        </div>


                        <button type="submit" class="btn btn-default">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
						<a  href="uploads.php" class="btn btn-default">View</a>

                    </form>

                </div>
            
            </div>
        </div>
    </div>    

</body>
</html>
