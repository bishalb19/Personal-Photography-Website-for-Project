<?php 

include("header.php");


?>
       <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-6">

                    <form role="form" action="package_processes.php" method="POST">

                        

                        <div class="form-group">
                            <label>Package Name</label>
                            <input type="text" name="p_name" class="form-control" placeholder="Enter text" required="">
                        </div>
						<div class="form-group">
                            <label>Offer</label>
                            <input type="text" name="p_offer" class="form-control" placeholder="Enter text" required="">
                        </div>
						<div class="form-group">
                            <label>Package price</label>
                            <input type="text" name="p_price" class="form-control" placeholder="Enter text" required="">
                        </div>
						


                        <button type="submit" class="btn btn-default">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
						<a  href="services.php" class="btn btn-default">View</a>

                    </form>

                </div>
            
            </div>
        </div>
    </div>    

</body>
</html>
