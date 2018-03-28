<?php 

include("header.php");


?>
       <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-6">

                    <form role="form" action="message_processes.php" method="POST">

                        
                        <div class="form-group">
                            <label>User Name</label>
                            <select name= "m_name" class="form-control">
							
							<?php
							include("connect.php");
							$sql="select * from user";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result))
							{
							 echo "<option value='".$row['user_id']."'>".$row['user_name']."</option>";
                             	
							}
							?>
							</select>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <input type="text" name="m_message" class="form-control" placeholder="Enter text" required="">
                        </div>
					
						


                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>
						<a  href="messages.php" class="btn btn-default">View</a>

                    </form>

                </div>
            
            </div>
        </div>
    </div>    

</body>
</html>
