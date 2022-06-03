<?php

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'> 
    <title>Calculadora</title>
    <link rel='stylesheet' type='text/css' href='Calculadora.css'>
    <script type="text/javascript" src="Calculadora.js"></script>
</head>

<body>
    <?php include 'Navbar2.php' ?>
    <div class="panel">
    <h1>Caculadora</h1>
    <table>
        <tr>
            <td colspan="4"><button id="Resultado">0</button></td>
        </tr>
        <tr>
            <td><button onclick="anadir('1')">1</button></td>
            <td><button onclick="anadir('2')">2</button></td>
            <td><button onclick="anadir('3')">3</button></td>
            <td><button class="operacion" onclick="anadir('+')">+</button></td>
        </tr>
        <tr>
            <td><button onclick="anadir('4')">4</button></td>
            <td><button onclick="anadir('5')">5</button></td>
            <td><button onclick="anadir('6')">6</button></td>
            <td><button class="operacion" onclick="anadir('-')">-</button></td>
        </tr>
        <tr>
            <td><button onclick="anadir('7')">7</button></td>
            <td><button onclick="anadir('8')">8</button></td>
            <td><button onclick="anadir('9')">9</button></td>
            <td><button class="operacion" onclick="anadir('*')">x</button></td>
        </tr>
        <tr>
            <td colspan="3"><button onclick="anadir('0')">0</button></td>
            <td colspan="3"><button class="operacion" onclick="anadir('/')">÷</button></td>
        </tr>
        <tr>
            <td colspan="2"><button onclick="borrar()" class="ac">AC</button></td>
            <td><button onclick="anadir('.')">.</button></td>
            <td><button onclick="calcular()">=</button></td>
        </tr>
    </table>
    </div>	
</body>

</html>