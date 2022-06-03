

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="Curriculum.css">
    <script src="Curriculum.js"></script>
</head>
<body>
    <?php include 'Navbar2.php' ?>
    <div class="datos">
    <h1>Currículum vitae</h1>
        <div class="dato">
            <h1>Datos personales</h1>
            <div>
                <h3>Nombre:</h3>
                <p>Jimmy Alexander Cajamarca Escaleras</p>
            </div>
            <div>
            <h3>Edad: </h3>
            <p>20 años</p>
            </div>
            <div>
            <h3>Docimilio: </h3>
            <p>Bolivar y Cariamanga</p>
            </div>
            <div>
                <h3>Teléfono: </h3>
                <p>072561993</p>
            </div>      
        </div>    
        <h1>Educación</h1>
        <div class="dato">
            <p>Escuela Adolfo Jurado Gonzáles (Actual 18 de Noviembre)</p>
            <p>Colegio Pio Jaramillo Alvarado</p>
            <p>Universidad Nacional de Loja. Computación</p>
            <p>(Tiempo de estudio en la UNL: 
            <?php
                $datos = calcularTiempo('2020-05-10', '2022-06-01');
                echo "Son ".$datos[0]; 
                echo " años con ".$datos[1];
                echo " meses y ".$datos[2];
                echo " días)";
                function calcularTiempo($finicio, $ffinal){
                    $date1 = date_create($finicio);
                    $date2 = date_create($ffinal);
                    $intervalo = date_diff($date1, $date2);
                    $tiempo=array();
                    foreach ($intervalo as $valor){
                        $tiempo[]=$valor;
                    }
                    return $tiempo;
                }
            ?>
            </p>
            
        </div> 
        <h1>Habilidades Técnicas</h1>

        <div class="dato">
            <ol>
                <li><p>Base de datos: SQL</p></li>
                <li><p>Programación: Python, C, Java</p></li>
                <li><p>Desarrollo web: HTML, CSS, Javascript, PHP, XML</p></li>
            </ol>
        </div>
        <h1>Trabajos realizados</h1>
        <div class="dato">
            <ul>
                <li><p>Reparación y mantenimiento de computadoras</p></li>
                <li><p>Formateo e instalación de Sistemas Operativos</p></li>
            </ul>   
        </div> 
        <h1>Deportes</h1>
        <div class="dato">
            <p>Ecuavoly</p>
            <p>Fútbol</p>
            <p>Basket</p>
        </div> 
        <h1>Capacitaciones</h1>
        <div class="dato">
            <p>Hacking WIFI</p>
            <p>Inteligencia Artifical y sus aplicaciones</p>
            <p>Introducción de Cyberseguridad</p>
        </div> 
        <h1>Contacto</h1>
        <div class="dato">
            <p>+593 917 393 40</p>
            <p>jimmy.cajamarca@unl.edu.ec</p>
            <p>Loja-Ecuador</p>
        </div> 
        <h1>Contador de Etiquetas</h1>
        <div class="eti">
        <p class="etiqueta">Total de div: 
            <button id="btnd" onclick="obtenerDivs()">Mostrar</button>
        </p>
        <p class="nu" id="contadorDivs"></p>
        </div>

        <div class="eti">
        <p class="etiqueta">Total de h1: 
            <button id="btnd" onclick="obtenerH1()">Mostrar</button>
        </p>
        <p class="nu" id="contadorH1"></p>
        </div>

        <div class="eti">
        <p class="etiqueta">Total de h3: 
        <button id="btnd" onclick="obtenerH3()">Mostrar</button>
        </p> 
        <p class="nu" id="contadorH3"></p>
        </div>

        <div class="eti">
        <p class="etiqueta">Total de p: 
        <button id="btnd" onclick="obtenerP()">Mostrar</button>
        </p>
        <p class="nu" id="contadorP"></p>
        </div>

        <div class="eti">
        <p class="etiqueta">Total de ul: 
        <button id="btnd" onclick="obtenerUL()">Mostrar</button>
        </p>
        <p class="nu" id="contadorUL"></p>
        </div>

        <div class="eti">
        <p class="etiqueta">Total de li: 
        <button id="btnd" onclick="obtenerLI()">Mostrar</button>
        </p>
        <p class="nu" id="contadorLI"></p>
        </div>

        <div class="eti">
        <p class="etiqueta">Total de ol: 
        <button id="btnd" onclick="obtenerOL()">Mostrar</button>
        </p>
        <p class="nu" id="contadorOL"></p>
        </div>
    </div>
</body>
</html>