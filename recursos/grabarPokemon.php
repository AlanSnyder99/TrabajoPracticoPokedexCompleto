<?php

session_start();

$conexion= mysqli_connect("localhost","root","","pokemonsSnyderAlan");  

$nombre=($_GET['nombrePokemon']);
$tipo=($_GET['tipoPokemon']);
$foto=($_GET['fotoPokemon']);
$ataque=($_GET['ataquePokemon']);


$grabar="UPDATE listaPokemon SET  foto = '$foto', tipo = '$tipo', ataque = '$ataque' WHERE nombre = '$nombre';";
header("location: indexLogin.php");

$result= mysqli_query($conexion,$grabar);









  ?>