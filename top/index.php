<?php
include_once "../config.php";
$pageNumber = isset($_GET["pageNumber"]) ? $_GET["pageNumber"] : 1;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once "../include/head.php"; ?>
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<?php include_once "../include/menu.php"; ?>
			</header>

			<!-- Main -->
			<article id="main">

				

				<!-- Creator Form -->
				<?php include_once "../include/top.php" ?>

			</article>

			<!-- Footer -->
			<footer id="footer">
				<?php include_once "../include/footer.php"; ?>
			</footer>

		</div>
		<?php include_once "../include/scripts.php"; ?>
	</body>
</html>