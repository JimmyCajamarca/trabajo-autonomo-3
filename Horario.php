<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Estudiantes</title>
	<link rel="stylesheet" href="Horario.css">
	<script src="ajax.js"> </script>
</head>
<body>
	<?php include 'Navbar2.php' ?>
	<div class="panel">
		<h1>Horario de clases (XML)</h1>	
			<table class="contenido" border="1">
			<thead class="negro">
				<tr>
					<td>HORA</td>
					<td>LUNES</td>
					<td>MARTES</td>
					<td>MIÉRCOLES</td>
					<td>JUEVES</td>
					<td>VIERNES</td>
				</tr>
			</thead>
                <?php
			    if (file_exists('Horario.xml')){
				    $xml=simplexml_load_file('Horario.xml');      
                    echo '<tr>';
				    echo '<td class="hora">'.$xml->horario->hora1.'</td>';
                    echo '<td class="a">'.$xml->horario->uno.'</td>';
                    echo '<td class="b">'.$xml->horario->dos.'</td>';
                    echo '<td class="c">'.$xml->horario->tres.'</td>';
                    echo '<td class="d">'.$xml->horario->cuatro.'</td>';
                    echo '<td class="d">'.$xml->horario->cuatro.'</td>';
                    echo '</tr>';

                    echo '<tr>';
				    echo '<td class="hora">'.$xml->horario->hora2.'</td>'; 
                    echo '<td class="e">'.$xml->horario->cinco.'</td>';
                    echo '<td class="d">'.$xml->horario->cuatro.'</td>';
                    echo '<td class="e">'.$xml->horario->cinco.'</td>';
                    echo '<td class="b">'.$xml->horario->dos.'</td>';
                    echo '<td class="a">'.$xml->horario->uno.'</td>';
                    echo '</tr>';

                    echo '<tr>';
				    echo '<td class="hora">'.$xml->horario->hora3.'</td>'; 
                    echo '<td class="c">'.$xml->horario->tres.'</td>';
                    echo '<td class="e">'.$xml->horario->cinco.'</td>';
                    echo '<td class="d">'.$xml->horario->cuatro.'</td>';
                    echo '<td class="a">'.$xml->horario->uno.'</td>';
                    echo '<td class="c">'.$xml->horario->tres.'</td>';
                    echo '</tr>';
			    }else{
				    exit('No se pudo abrir xml');
			    }
			    ?>
		</table>
		<div class="bo">
			<button class="btn" id="boton" onclick="traerDatos()">JSON - AJAX</button>
		</div>
			<table class="contenido" border="1">
				<thead class="negro">
					<tr>
						<th>Hora</th>
						<th>Lunes</th>
						<th>Martes</th>
						<th>Miercoles</th>
						<th>Jueves</th>
						<th>Viernes</th>
					</tr>
				</thead>
				<tbody id="res">
				</tbody>
			</table>
	</div>
</body>
</html>