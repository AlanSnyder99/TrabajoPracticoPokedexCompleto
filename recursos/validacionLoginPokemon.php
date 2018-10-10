<?php
session_start();
  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 




if(isset($_POST["che"])){
	$checkbox = $_POST["che"];
	
	foreach ($checkbox as $check){
		
		if($check=="recordarme"){
		setcookie("galleta",$_POST["email"],0, "/");	
	
	} else{
		setcookie("galleta",1,time()-3600);
	}
	
	}

}

$emaliBase = "admin@pokedex.com";
$contrasenaBase = "1234";


if(isset($_POST["email"]) && isset($_POST["contrasena"]) ){
$email=$_POST["email"];
$contrasena=$_POST["contrasena"];

	if ($email==$emaliBase && $contrasena==$contrasenaBase) {
	$_SESSION["login"]="1";
	header("location:indexLogin.php?"); /*Redirije a esa pagina especifica*/
	

	} else{
		echo "Emial o contraseña incorrecotos";
		echo "<a href='../index.php'>Volver</a>";
	}
}

echo "<br>";



 ?>

</body>
</html>