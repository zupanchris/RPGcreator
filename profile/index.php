<?php include_once "../config.php";
validation();


if(isset($_POST["updateProfile"])){
	$update = $connection->prepare("
	update user set
	firstName = :firstNameUpdate,
	lastName = :lastNameUpdate,
	email = :emailUpdate
	where id = :id");
	$update->execute(array(
	"id" => $_SESSION[$appID."authorized"]->id,
	"firstNameUpdate" => $_POST["firstNameUpdate"],
	"lastNameUpdate" => $_POST["lastNameUpdate"],
	"emailUpdate" => $_POST["emailUpdate"]));
			
	header("location: index.php");
	
}else if(isset($_POST["passwordChange"]) && md5($_POST["oldPassword"])==$_SESSION[$appID."authorized"]->password && $_POST["newPassword"]==$_POST["passwordConfirm"]){
	$update = $connection->prepare("
	update user set
	password = md5(:newPassword)
	where id = :id");
	$update->execute(array(
	"id" => $_SESSION[$appID."authorized"]->id,
	"newPassword" => $_POST["newPassword"]));
			
	header("location: index.php");
}else{	
	$user = $connection->prepare("select * from user where id = :id;");
	$user->execute(array(
	"id" => $_SESSION[$appID."authorized"]->id));
	$results = $user->fetch(PDO::FETCH_OBJ);
}


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
		<link rel="stylesheet" href="<?php echo $sourceAPP;  ?>assets/css/cropper/cropper.css">
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
												<?php
												if(file_exists("../images/users/" . $_SESSION[$appID."authorized"]->id . ".png")):
												?>
												<img id="oldPicture" class="profilePicture" src="<?php echo $sourceAPP; ?>images/users/<?php echo $_SESSION[$appID."authorized"]->id ?>.png">
												<?php else: ?>
												<img id="oldPicture" class="profilePicture" src="<?php echo $sourceAPP; ?>images/users/default.png">
												<?php
												endif;
												?>
								                <ul class="nav nav-pills nav-stacked admin-menu" >
								                    <li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
								                    <li><a href="" data-target-id="userCharacters"><i class="glyphicon glyphicon-download-alt"></i> Your Characters</a></li>
								                    <li><a href="" data-target-id="change-password"><i class="glyphicon glyphicon-lock"></i> Change Password</a></li>
								                    <li><a href="" data-target-id="settings"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
								                    <li><a href="" data-target-id="profilePicture"><i class="glyphicon glyphicon-picture"></i> Change Profile Picture</a></li>
								                </ul>
											</section>											
										</div>

								</div>
								<div class="8u 12u(narrower) important(narrower)">

									<!-- Content -->
										<div class="content">
											<section>
												<?php													
												include_once '../include/profile.php';
												?>
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
        
    	<script src="<?php echo $sourceAPP; ?>assets/js/cropper/cropper.js"></script>
   		<script src="<?php echo $sourceAPP; ?>assets/js/cropper/main.js"></script>
        
        <script>
        	$("#saveProfilePicture").click(function(){
		  	var cropcanvas = $('#image').cropper('getCroppedCanvas');
			var croppng = cropcanvas.toDataURL("image/png");
			
		  	$.ajax({
			  type: "POST",
			  url: "saveProfilePicture.php",
			  data: {id: <?php echo $_SESSION[$appID."authorized"]->id; ?>, picture: croppng},
			  success: function(status){
			  	if(status==="OK"){
			  		$("#oldPicture").attr("src",croppng);
			  	}else{
			  		alert(status);
			  	}
			  }
			});
			
		  	return false;
		  });        	
        </script>

	</body>
</html>
