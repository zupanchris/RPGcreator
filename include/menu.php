<h1 id="logo"><a href="<?php echo $sourceAPP; ?>"><img src="<?php echo $sourceAPP; ?>/images/headline.png" height="60" /img></a></h1>
<nav id="nav">
<ul>
	
	<?php 
	menu($sourceAPP . "index.php", "Home");
	menu($sourceAPP . "creator/index.php", "Creator");
	if(isset($_SESSION[$appID."authorized"])):
	menu($sourceAPP . "profile/index.php", "Profile");
	menu($sourceAPP . "private/dashboard.php", "Dashboard");?>							
	<?php endif; ?>
	<?php if(!isset($_SESSION[$appID."authorized"])): ?>
	<li class="active"><a href="<?php echo $sourceAPP; ?>login.php">Log In</a></li>
	<?php else: ?>
	<li class="active"><a href="<?php echo $sourceAPP; ?>logout.php">Log Out</a></li>
	<?php endif;?>
</ul>
</nav>