<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Estudiantes</title>
	<link rel="stylesheet" href="Estudiantes.css">
	<script src="Estudiantes.js"></script>
</head>
<body>
	<?php include 'Navbar2.php' ?>
	<div class="panel">
		<div class="formulario">
			<div class=formularioi>
				<div class="tamano">
					<h1>Registro de estudiantes</h1>
					<form method="post" action="RegistrarEstudiantes.php">
						<input type="text" name="cedula" placeholder="Cédula" required>
						<input type="text" name="nombre" placeholder="Nombre" required>
						<input type="text" name="apellido" placeholder="Apellido" required>
						<input type="text" name="carrera" placeholder="Carrera" required>
						<br><br>
						<div class="bottom">
							<input type="submit" name="estudiante" value="Registrar">
						</div>
					</form>
				</div>
			</div>
		</div>
		<input class="bus" list="Estudiantes" type="text" name="buscador" placeholder="Ingrese un nombre buscar" onkeyup="auto(this.value)">
		
		<datalist id="Estudiantes">
    	 	<option></option>
  		</datalist>

		<button onclick="Buscar()">🔍</button>

		<h1>Listado de estudiantes de 5to B</h1>	
		<table class="contenido" id="mitabla" border="1">
			<thead class="negro">
				<tr>
					<td>#</td>
					<td>Cedula</td>
					<td>Nombre</td>
					<td>Apellido</td>
					<td>Carrera</td>
				</tr>
			</thead>
			<?php
			if (file_exists('Estudiantes.xml')){
				$xml=simplexml_load_file('Estudiantes.xml');
				//print_r($xml);
    			$enumeracion=1;
				foreach ($xml->caracteristicas as $key =>$car){
					echo '<tr>';
        			echo '<td class="color">'.$enumeracion++.'</td>';
					echo '<td class="color">'.$car->cedula.'</td>';
					echo '<td class="color">'.$car->nombre.'</td>';
					echo '<td class="color">'.$car->apellido.'</td>';
					echo '<td class="color">'.$car->carrera.'</td>';
					echo '</tr>';
				}
			}else{
				exit('No se pudo abrir xml');
			}
			?>
		</table>
	</div>	
	
</body>
</html>
