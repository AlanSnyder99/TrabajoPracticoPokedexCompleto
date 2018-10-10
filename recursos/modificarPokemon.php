<?php
session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>ModificarPokemon</title>
	<link rel="stylesheet" href="./css/busquedaPokemon.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
</head>
<body>

<?php


$conexion= mysqli_connect("localhost","root","","pokemonsSnyderAlan");  
$busqueda=($_GET["nombre"]);
$sql="SELECT * FROM listaPokemon WHERE nombre = '$busqueda'";
$result= mysqli_query($conexion,$sql);
$rows= mysqli_fetch_assoc($result); 

  ?>

<form method="Get" class="listaPokemons" action="grabarPokemon.php" enctype="applicationn/x-www-form-urlencored" >

	<div class="buscador" >
 		<div class="textoBuscador">Modificar Pokemon</div>
 		<br>
 		<h3>Nombre</h3>
 		<input type="text" name="nombrePokemon" class="insertAgregar" value="<?php echo $rows['nombre']  ?>"  readonly="readonly"  >
 		<h3>Ataque</h3>
 		<input type="text" name="ataquePokemon" class="insertAgregar" value="<?php echo $rows['ataque']  ?>" >
 		<h3>Tipo</h3>
 		<input type="text" name="tipoPokemon" class="insertAgregar" value="<?php echo $rows['tipo']  ?>" >
 		<h3>Link de la foto de su pokemon</h3>
 		<input type="text" name="fotoPokemon" class="insertAgregar" value="<?php echo $rows['foto']  ?>">
 		
 		<br><br>
 		<button>Modificar</button>
 		<br>
 		<a href="./indexLogin.php">Volver</a>
 		<br>
 	</div>



</form>

</body>
</html>