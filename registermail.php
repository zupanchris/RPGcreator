<?php
include_once "config.php";

$validation = session_id();

$insert = $connection->prepare("
		
insert into user (firstName,lastName,username,password,email,level,sessionid,active) values
				 (:firstName,:lastName,:username,md5(:password),:email,'free',:validation,false);
				 
					 ");
$insert->execute(array(
'firstName' => $_POST['firstName'],
'lastName' => $_POST['lastName'],
'username' => $_POST['username'],
'password' => $_POST['password'],
'email' => $_POST['email'],
'validation' => $validation
));


	
$email = $connection->prepare("

		select * from user where sessionid=:validation;

");
$email->execute(array("validation" => $validation));
$result = $email->fetch(PDO::FETCH_OBJ);

require 'PHPmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
echo sendEmail($mail,array(array("email"=>$result->email, "name"=>$result->name)),"Confirmation mail","Please confirm your mail via the following link: zupanc.byethost3.com" . $sourceAPP . "login.php?verify=" . $validation);

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
			<?php include_once "include/confirm.php"; ?>
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

