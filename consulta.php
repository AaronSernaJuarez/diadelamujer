<?php 

	$conexion=mysqli_connect('localhost','root','','diadelamujer');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>consulta dia de la mujer</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			
			<td>nombre</td>
			<td>sexo</td>
			<td>comentarios</td>	
		</tr>

		<?php 
		$sql="SELECT * FROM visitas";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 
		 ?>

		<tr>

			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['sexo'] ?></td>
			<td><?php echo $mostrar['comentarios'] ?></td>
		</tr>
	}
	<?php 
	}
	 ?>
	</table>
</body>
</html>