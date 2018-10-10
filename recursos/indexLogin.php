<!DOCTYPE html>
<html>
<head>

	<title>Pokedex</title>
		<link rel="stylesheet" href="./css/busquedaPokemon.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">

</head>
<body>

<form method="get" class="listaPokemons">

	<div class="buscador" >
 		<a href="indexLogin.php"><div class="textoBuscador">Que pokemon quieres buscar?</div></a>
 		<input type="text" name="whoisthatpokemon" class="esciribirBuscador" >
 		<input type=submit name="enviar" value="Buscar">
 		<a href="./agregarPokemon.php" class="textoLogin3"><div class="textoLogin3">Agregar Nuevo Pokemon!</div></a>
 		<a href="../index.php"><div class="textoLogin2">Deslogearse</div></a>
 </div>


<?php

$conexion= mysqli_connect("localhost","root","","pokemonsSnyderAlan"); 

if(isset($_GET['whoisthatpokemon'])){
			
			$buscado=($_GET['whoisthatpokemon']);
			$sql="select * from listaPokemon where nombre='".$buscado."';";
			$result= mysqli_query($conexion,$sql);
			$totalFilas= mysqli_num_rows($result);
			
				
				if($totalFilas!=0){
						
				while($rows = mysqli_fetch_assoc($result)){
							
	?>
	
<div id="pokemon" class="w3-panel w3-border-top w3-border-bottom w3-border-black">
		<img id="img" src=<?php echo " ".$rows['foto']; ?>>
		<p class="nombre"> <?php echo " ".$rows['nombre']; ?> </p>
		<p class="ataque"> <?php echo " ".$rows['ataque']; ?> </p>
		<p class="tipo"> <?php echo " ".$rows['tipo']; ?> </p>
	<?php 
	echo "<a href=./modificarPokemon.php?nombre=".$rows['nombre'].	" class='modificar'>Modificar </a>";	
	?>
	<?php 	
	echo "<a href=./eliminarPokemon.php?nombre=".$rows['nombre']. " class='eliminar'> Eliminar <a>";  
	?>
</div>
	
	<?php
							}
				}
				
				if($totalFilas==0){
					echo "<p class='noexiste'>No existe ese pokemon</p>";
					echo "<br>";
					$sql2="select * from listaPokemon;";
					$result2 = mysqli_query($conexion,$sql2);
					while($rows = mysqli_fetch_assoc($result2)){
				?>

<div id="pokemon" class="w3-panel w3-border-top w3-border-bottom w3-border-black">
		<img id="img" src=<?php echo " ".$rows['foto']; ?>>
		<p class="nombre"> <?php echo " ".$rows['nombre']; ?> </p>
		<p class="ataque"> <?php echo " ".$rows['ataque']; ?> </p>
		<p class="tipo"> <?php echo " ".$rows['tipo']; ?> </p>
	<?php 
	echo "<a href=./modificarPokemon.php?nombre=".$rows['nombre'].	" class='modificar'>Modificar </a>";	
	?>
	<?php 	
	echo "<a href=./eliminarPokemon.php?nombre=".$rows['nombre']. " class='eliminar'> Eliminar <a>";  
	?>
</div>
				<?php
						}
				}
		}		
		
			else{
			$sql="select * from listaPokemon;";
			$result= mysqli_query($conexion,$sql);
		
			while($rows = mysqli_fetch_assoc($result)){
						
?>

<div id="pokemon" class="w3-panel w3-border-top w3-border-bottom w3-border-black">
		<img id="img" src=<?php echo " ".$rows['foto']; ?>>
		<p class="nombre"> <?php echo " ".$rows['nombre']; ?> </p>
		<p class="ataque"> <?php echo " ".$rows['ataque']; ?> </p>
		<p class="tipo"> <?php echo " ".$rows['tipo']; ?> </p>
	<?php 
	echo "<a href=./modificarPokemon.php?nombre=".$rows['nombre'].	" class='modificar'>Modificar </a>";	 	
	echo "<a href=./eliminarPokemon.php?nombre=".$rows['nombre']. " class='eliminar'> Eliminar </a>";  
	?>
</div>

<?php

						}
		}

  ?>



</form>

</body>
</html>