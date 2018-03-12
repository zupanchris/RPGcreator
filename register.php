<?php
include_once "config.php";
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
			<?php include_once "include/register_form.php"; ?>
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

