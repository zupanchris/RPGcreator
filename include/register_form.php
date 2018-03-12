<div class="wrapper">
	<div class="container">
		<form class="form" action="test.php" method="post">
			<input type="text" placeholder="First name" id="firstName"  name= "firstName" value="<?php
			if (isset($_GET["firstName"])) {
				echo $_GET["firstName"];
			}
			?>" required>
			<input type="text" placeholder="Last name" id="lastName"  name= "lastName" value="<?php
			if (isset($_GET["lastName"])) {
				echo $_GET["lastName"];
			}
			?>" required>
			<input type="text" placeholder="Email" id="email"  name= "email" value="<?php
			if (isset($_GET["email"])) {
				echo $_GET["email"];
			}
			?>" required>
			<input type="text" placeholder="Username" id="username"  name= "username" value="<?php
			if (isset($_GET["username"])) {
				echo $_GET["username"];
			}
			?>" required>
			<input type="password" placeholder="Password" id="password" name="password" required>
			<button type="submit" id="register-button">
				Register
			</button>			
		</form>
	</div>
</div>