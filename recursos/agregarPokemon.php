<?php
session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>AgregarPokemon</title>
	<link rel="stylesheet" href="./css/busquedaPokemon.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
</head>
<body>

<?php

$conexion= mysqli_connect("localhost","root","","pokemonsSnyderAlan");  

  ?>

<form method="Get" class="listaPokemons" action="validacionPokemon.php" action="./validacionPokemon.php">

	<div class="buscador" >
 		<div class="textoBuscador">Agregar un nuevo Pokemon</div>
 		<br>
 		<h3>Inserte Nombre</h3>
 		<input type="text" name="nombrePokemon" class="insertAgregar" >
 		<h3>Inserte Ataque</h3>
 		<input type="text" name="ataquePokemon" class="insertAgregar" >
 		<h3>Inserte Tipo</h3>
 		<input type="text" name="tipoPokemon" class="insertAgregar" >
 		<h3>Link de la foto de su pokemon</h3>
 		<input type="text" name="fotoPokemon" class="insertAgregar" >
 		<br><br>
 		<button>Agregar</button>
 		<br>
 		<a href="./indexLogin.php">Volver</a>
 		<br>
 	</div>



</form>

</body>
</html>