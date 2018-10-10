<?php

session_start();

$conexion= mysqli_connect("localhost","root","","pokemonsSnyderAlan");  

$nombre=($_GET['nombre']);

$eliminar="DELETE FROM listaPokemon WHERE nombre = '$nombre';";
header("location: ./indexLogin.php");
$result= mysqli_query($conexion,$eliminar);

echo $eliminar;








  ?>