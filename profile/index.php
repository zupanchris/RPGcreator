<?php include_once "../config.php";
validation();
$pageNumber = isset($_GET["pageNumber"]) ? $_GET["pageNumber"] : 1;
?>
<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<?php include_once "../include/head.php"; ?>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>
	<body class="left-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<?php include_once "../include/menu.php"; ?>
				</header>

			<!-- Main -->
				<article id="main">


					<!-- One -->
						<section class="wrapper style4 container">						
							<div class="row 150%">
								<div class="4u 12u(narrower)">

									<!-- Sidebar -->
										<div class="sidebar">
											<section>
												<header>
													<h3><?php echo $_SESSION[$appID."authorized"]->username; ?></h3>
												</header>
												<img class="profilePicture" src="https://openclipart.org/image/2400px/svg_to_png/294182/Bearded-Man-Profile.png">
								                <ul class="nav nav-pills nav-stacked admin-menu" >
								                    <li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
								                    <li><a href="" data-target-id="userCharacters"><i class="glyphicon glyphicon-download-alt"></i> Your Characters</a></li>
								                    <li><a href="" data-target-id="change-password"><i class="glyphicon glyphicon-lock"></i> Change Password</a></li>
								                    <li><a href="" data-target-id="settings"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
								                </ul>
											</section>											
										</div>

								</div>
								<div class="8u 12u(narrower) important(narrower)">

									<!-- Content -->
										<div class="content">
											<section>
												<?php
												$user = $connection->prepare("select * from user where username = :username;");
												$user->execute(array(
												"username" => $_SESSION[$appID."authorized"]->username));
												$results = $user->fetchAll(PDO::FETCH_OBJ);
												foreach ($results as $option):
													
												include_once '../include/profile.php';
													
												endforeach; ?>
											</section>
										</div>

								</div>
							</div>
							
						</section>

					<!-- Two -->
						

				</article>

			<!-- Footer -->
				<footer id="footer">

					<?php include_once "../include/footer.php"; ?>

				</footer>

		</div>

		<!-- Scripts -->
			<?php include_once "../include/scripts.php"; ?>
			<script>	
			
			         $(document).ready(function()
			      {
			        var navItems = $('.admin-menu li > a');
			        var navListItems = $('.admin-menu li');
			        var allWells = $('.admin-content');
			        var allWellsExceptFirst = $('.admin-content:not(:first)');
			        allWellsExceptFirst.hide();
			        navItems.click(function(e)
			        {
			            e.preventDefault();
			            navListItems.removeClass('active');
			            $(this).closest('li').addClass('active');
			            allWells.hide();
			            var target = $(this).attr('data-target-id');
			            $('#' + target).show();
			        });
			        });
			</script>
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
