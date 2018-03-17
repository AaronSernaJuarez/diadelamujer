<html>

	<head>
		<title>
			Salida de datos
		</title>
	</head>
	
		<?php
	  
			$nombre = $_GET["txtnombre"];
			$comentarios = $_GET["txtcomentarios"];
			$sexo = $_GET["txtsexo"];
			
			$conexion = mysqli_connect("localhost","root","","diadelamujer");
			$consulta = mysqli_query($conexion,"insert into visitas values (\"$nombre\",\"$sexo\",$comentarios);");
			if ($sexo=="Femenino") {
			
			echo "<td><strong style='color: pink;'>".$nombre."</strong></td>";
			
				echo "<td><strong style='color: pink;'>".$comentarios."</strong></td>";
				
			}
			else{
				echo "".$nombre;
				echo "<td><strong style='color: blue;'>".$comentarios."</strong></td>";
			}
			
			
			?>	
		<p>El dato fue guardado fue guardado</p>	
	</body>
</html>