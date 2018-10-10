<?php
session_start();
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="./css/login.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>


<!--Guardo el valor de la cookie en una variable-->

<?php



$galletaEmail="";

if (isset($_COOKIE["galleta"])) {
$galletaEmail=$_COOKIE["galleta"];
}

 ?> 

<form action="validacionLoginPokemon.php" method="Post" enctype="applicationn/x-www-form-urlencored" class="formulario" >
	
	<h2 class="titulo_form">Logearse</h2>

<div class="contendor_inputs">
	<input type="email" name="email" placeholder="Ingrese su Email" class="email" value="<?php echo($galletaEmail); ?>">
	<input type="password" name="contrasena" placeholder="Ingrese contraseña" class="contra">
	<input type="submit" name="logearse" class="boton" value="Entrar">



</div>





</form>

</body>
</html>