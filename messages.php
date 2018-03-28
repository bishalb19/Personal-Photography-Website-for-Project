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
                                            <th>User Name</th>
											<th>MEssage</th>
                                            <th>Update</th>
											<th>Delete</th>
                                       
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									include ("connect.php");
									$sql="select message_id as m_id,user_name,message from message as m join user as u on(m.user_id=u.user_id)";
									$result=mysql_query($sql);
									while($row=mysql_fetch_array($result))
									{
										$id=$row['m_id'];
										echo "
										<tr class='odd gradeX'>
                                            <td>".$row['user_name']."</td>
											<td>".$row['message']."</td>
									        <td> <a href=''> Update </a> </td>
											<td><a href='message_delete.php?id=$id'> Delete </a></td>
                                        
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
