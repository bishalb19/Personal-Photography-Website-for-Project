<?php 

include("header.php");


?>
       <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-6">

                    <form role="form" action="category_processes.php" method="POST">

                        

                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="c_name" class="form-control" placeholder="Enter text" required="">
                        </div>
						
						


                        <button type="submit" class="btn btn-default">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
						<a  href="categorys.php" class="btn btn-default">View</a>
						

                    </form>

                </div>
            
            </div>
        </div>
    </div>    

</body>
</html>
