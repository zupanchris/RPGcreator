<?php
include_once "../../config.php";
validation();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
		include_once '../include/head.php';
 ?>
 
        <script src="../js/vendor/fontawesome/fontawesome-all.min.js"></script>
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php
				include_once '../include/navigation.php';
 ?>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Premium Users</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                DataTables Advanced Tables
                            </div>
                            <!-- /.panel-heading -->
                            			
                            <div class="panel-body">                            	
                                <div class="dataTable_wrapper">
                                		<?php 
										$users = $connection->prepare("select * from user where level like 'premium';");
										$users->execute();
										$results = $users->fetchAll(PDO::FETCH_OBJ);
										?>
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">                                    	
                                        <thead>
                                            <tr>
                                            	<th>ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>                                
                                        <tbody>
                                        <?php foreach ($results as $option):
										?>                                     	
                                            <tr>
                                            	<td><?php echo $option -> id; ?></td>                                           	
                                                <td><?php echo $option -> username; ?></td>
                                                <td><?php echo $option -> email; ?></td>
                                                <td><?php echo $option -> firstName; ?></td>
                                                <td><?php echo $option -> lastName; ?></td>
                                                <td>
                                                	<a href="#" title="Edit"><i class="far fa-edit"></i></a>
													<a href="#" title="Delete"><i class="far fa-trash-alt"></i></a>
													<a href="#" title="Ban"><i class="fas fa-ban" style="color: #b74d4d"></i></a>
                                                </td>  
                                            </tr>  
                                        <?php endforeach; ?>  
                                        </tbody> 
                                    </table>
                                </div> 
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->              
              
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>
        

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
			$(document).ready(function() {
				$('#dataTables-example').DataTable({
					responsive : true
				});
			});
        </script>

    </body>
</html>
