<?php 

include("header.php");

?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Caption</th>
                                            <th>Price</th>
											<th>Availability</th>
											<th>Image</th>
											<th>Update</th>
											<th>Delete</th>
                                       
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									include ("connect.php");
									$sql="select upload_id as c_id, category_name,caption,price,sell,image from upload as u join category_g as c on(u.category_id=c.category_id)";
									$result=mysql_query($sql);
									while($row=mysql_fetch_array($result))
									{   
										$id=$row['c_id'];
										$image=$row['image'];
										$images=$id.$image;
										if($row['sell']=1)
										{
											$sell_op="yes";
										}
										else 
										{
											$sell_op="no";
										}
										
										echo "
										<tr class='odd gradeX'>
                                            <td>".$row['category_name']."</td>
                                            <td>".$row['caption']."</td>
                                            <td>".$row['price']."</td>
											<td>".$sell_op."</td>
											<td><img src='upload/".$images."' height=75 width=150  /></td>
											
											<td><a href='upload_update.php?id=$id'> Update </a> </td>
											<td><a href='upload_delete.php?id=$id'> Delete </a></td>
                                        
                                        </tr>";
									}
									?>
                                        
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
    
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
