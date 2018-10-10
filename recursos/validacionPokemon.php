<?php

session_start();
  

$conexion= mysqli_connect("localhost","root","","pokemonsSnyderAlan");   
$nombre=($_GET["nombrePokemon"]);
$tipo=($_GET["tipoPokemon"]);
$ataque=($_GET["ataquePokemon"]);
$foto=($_GET["fotoPokemon"]);
$codigos="SELECT nombre FROM listaPokemon WHERE nombre = '$nombre' ";
$result= mysqli_query($conexion,$codigos);
$numeroFilas= mysqli_num_rows($result);


if($numeroFilas==0){
$insertar="INSERT INTO listaPokemon (foto, nombre, ataque, tipo) VALUES('$foto','$nombre','$ataque','$tipo');";
header("location: indexLogin.php");
$result= mysqli_query($conexion,$insertar);
} else{
	echo "EL Nombre del Pokemon es repetido";
	echo "<a href=indexLogin.php> Volver al inicio <a>";
}


  ?>