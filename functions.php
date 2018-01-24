<?php

//funkcija se zove stavkaIzbornika i prima dva parametra
function menu($source,$description){
	?>
	<li<?php echo $_SERVER["PHP_SELF"] === $source /*prvi parametar*/ ? " class=\"active\"" : "";?>>
		<a href="<?php echo $source; /*prvi parametar*/?>"><?php echo $description; /*drugi parametar*/?></a>
	</li>
	<?php
}

//funckija se zove provjeraOvlasti i ne prima parametra
function validation(){
	if(!isset($_SESSION[$GLOBALS["appID"]."authorized"])){
		header("location: " . $GLOBALS["sourceAPP"]);
	}
}

function getValue($key){
	return isset($_GET[$key]) ? $_GET[$key] : "";
}

function oznacenRadio($kljuc,$vrijednost){
	if(!isset($_GET[$kljuc])){
		return "";
	}
	if($_GET[$kljuc]===$vrijednost){
		return " checked=\"checked\" ";
	}
	return "";
}

function oznacenCheckbox($kljuc,$vrijednost){
	if(!isset($_GET[$kljuc])){
		return "";
	}
	foreach ($_GET[$kljuc] as $key => $value) {
		if ($vrijednost===$value){
			return " checked=\"checked\" ";
		}
	}
	return "";
}