<?php
include_once "config.php";

$insert = $connection->prepare("insert into user (id,firstName,lastName,username,password,email,level)
values (null,:firstName, :lastName, :username, md5(:password), :email, 'free')");
$insert->execute(array(
"firstName" => $_POST["firstName"],
"lastName" => $_POST["lastName"],
"username" => $_POST["username"],
"password" => $_POST["password"],
"email" => $_POST["email"]
));
header( "refresh:2;url=login.php" );
?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="assets/css/style.css">
		<script src="<?php echo $sourceAPP; ?>assets/js/index.js"></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<?php
		include_once "include/head.php";
 ?>
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<?php
				include_once "include/menu.php";
 ?>
			</header>

			<!-- Main -->
			<article id="main">
			Please wait...
			</article>


			<!-- Footer -->
			<footer id="footer">
				<?php
				include_once "include/footer.php";
 ?>
			</footer>

		</div>

</body>
</html>

