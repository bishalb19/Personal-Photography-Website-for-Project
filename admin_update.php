<?php 

include("header.php");
include("connect.php");
$id=$_GET['id'];
$sql="select * from admin where admin_id=$id";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
	{
     $name=$row['admin_name'];
     $email=$row['email'];
     $password=$row['password'];	 

	}

?>
       <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-6">

                    <form role="form" action="<?php echo "admin_update_processes.php?id=$id";  ?>" method="POST">

                        

                        <div class="form-group">
                            <label>Admin Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name;  ?>">
                        </div>
						<div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $email;  ?>">
                        </div>
						<div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="<?php echo $password; ?> ">
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
