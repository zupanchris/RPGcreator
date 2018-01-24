<?php
include_once "../config.php";
validation();
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

				<header class="special container">
					<span class="icon fa"><img src="../images/pic01.png" height="60" /img></span>
					<h2>This is your <strong>Creator</strong></h2>
					<p>
						Create your character quick and easy just bellow.
					</p>
				</header>

				<!-- Creator Form -->
				<section class="wrapper style1 container special">
					<div class="row">
						<div class="4u -4u 12u(narrower)">

							<form method="get" enctype="multipart/form-data">
								<div class="form-group">									
									<input type="text" name="characterName" placeholder="Character Name"
									value="<?php echo getValue("characterName"); ?>" required />
								</div>
								
								<div class="form-group">
									<label for="race">Select Your Race</label>
									<br />
									<select class="form-control" name="characterRace">
										<optgroup label="Dwarfs">
											<option >Hill Dwarf</option>
											<option>Mountain Dwarf</option>
										</optgroup>
										<optgroup label="Elfs">
											<option>High Elf</option>
											<option>Wood Elf</option>
											<option>Dark Elf (Drow)</option>
										</optgroup>
										<optgroup label="Halflings">
											<option>Lightfoot Halfling</option>
											<option>Stout Halfling</option>
										</optgroup>
										<optgroup label ="Gnomes">
											<option>Forest Gnome</option>
											<option>Rock Gnome</option>
										</optgroup>
										<optgroup label= "Other Playable Races">
											<option>Human</option>
											<option>Dragonborn</option>
											<option>Half-Elf</option>
											<option>Half-Orc</option>
											<option>Tiefling</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group">
									<label for="class">Select Your Class</label>
									<br />
									<select class="form-control" name="characterClass">
										<option>Barbarian</option>
										<option>Bard</option>
										<option>Cleric</option>
										<option>Druid</option>
										<option>Fighter</option>
										<option>Monk</option>
										<option>Paladin</option>
										<option>Ranger</option>
										<option>Rogue</option>
										<option>Sorcerer</option>
										<option>Warlock</option>
										<option>Wizard</option>
									</select>
								</div>

								<div class="form-group">
									<label for="background">Select Your Background</label>
									<br />
									<select class="form-control" name="characterBackground">
										<option>Acolyte</option>
										<option>Charlatan</option>
										<option>Criminal</option>
										<option>Entertainer</option>
										<option>Folk Hero</option>
										<option>Guild Artisan</option>
										<option>Hermit</option>
										<option>Noble</option>
										<option>Sage</option>
										<option>Sailor</option>
										<option>Soldier</option>
										<option>Urchin</option>
									</select>
								</div>
								<div class="form-group">
									<textarea type="text" id="subject" name="characterDescription" placeholder="Describe your character" style="height:200px"
									value="<?php echo getValue("characterDescription"); ?>" required></textarea>
								</div>

								<input type="submit" value="Submit Character">
							</form>
						</div>
					</div>
				</section>

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