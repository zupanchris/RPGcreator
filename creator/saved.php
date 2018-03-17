<?php
include_once "../config.php";
validation();
header( "refresh:3;url=../top/index.php" );
?>
<!DOCTYPE HTML>
<!--
Twenty by HTML5 UP
html5up.net | @ajlkn
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<?php
		include_once "../include/head.php";
 ?>
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<?php
				include_once "../include/menu.php";
 ?>
			</header>

			<!-- Main -->
			<article id="main">

				

				<!-- Creator Form -->
				<?php include_once "../include/saved.php" ?>

			</article>
			
			<!-- Footer -->
			<footer id="footer">
				<?php
	include_once "../include/footer.php";
 ?>
			</footer>

		</div>
		<?php
			include_once "../include/scripts.php";
 ?>
	</body>
</html>