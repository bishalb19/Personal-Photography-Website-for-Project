<?php 

include("header.php");


?>
       <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-6">

                    <form role="form" action="user_processes.php" method="POST">

                        

                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="u_name" class="form-control" placeholder="Enter text" required="">
                        </div>
						<div class="form-group">
                            <label>Email</label>
                            <input type="email" name="u_email" class="form-control" placeholder="Enter text" required="">
                        </div>
						<div class="form-group">
                            <label>Password</label>
                            <input type="password" name="u_password" class="form-control" placeholder="Enter text" required="">
                        </div>
						


                        <button type="submit" class="btn btn-default">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
						<a  href="users.php" class="btn btn-default">View</a>

                    </form>

                </div>
            
            </div>
        </div>
    </div>    

</body>
</html>
