<div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>		
			<?php 
			if(isset($_GET['verify']) && $_GET['verify']==$validation){
				echo 'Your mail is confirmed. Please log in.';
				$update = $connection->prepare("		
				update user set active=true where sessionid=:verify;
				");
				$update->execute(array(
				'verify' => $_GET['verify']));
			}
			?>
		<form class="form" action="authorize.php" method="post">
			<input type="text" placeholder="Username" id="username"  name= "username" value="<?php
			if (isset($_GET["username"])) {
				echo $_GET["username"];
			}
			?>" required>
			<input type="password" placeholder="Password" id="pwd" name="password" required>
			<button type="submit" id="login-button">
				Login
			</button>
			<br />
			<label>Not a member yet?</label>
			<br />
			<a href="register.php" class="button">Register here</a>
			<br />
			<?php
			if (isset($_GET["failure"])) {
				echo "Wrong Username/Password combination";
			}
			?>
		</form>
	</div>
</div>