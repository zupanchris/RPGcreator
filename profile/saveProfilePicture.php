<?php include_once "../config.php";
validation();

//dolazim s GET metodom s stranice index
if(isset($_SESSION[$appID."authorized"]->id)){
	$ifp = fopen(  "../images/users/" . $_SESSION[$appID."authorized"]->id . ".png", "wb" ); 
    $data = explode( ',', $_POST["picture"]);
    fwrite( $ifp, base64_decode( $data[ 1 ] ) );
    fclose( $ifp ); 
	echo "OK";
}else{
	header("location: index.php");
}