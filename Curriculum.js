function obtenerDivs() {
    var contador = document.getElementById("contadorDivs");
    var divs = document.querySelectorAll('div').length;
    //console.log("Hay " + divs + " elementos");
    contador.textContent = divs;
}

function obtenerH1() {
    var contador = document.getElementById("contadorH1");
    var divs = document.querySelectorAll('h1').length;
    contador.textContent = divs;
}

function obtenerH3() {
    var contador = document.getElementById("contadorH3");
    var divs = document.querySelectorAll('h3').length;
    contador.textContent = divs;
}

function obtenerP() {
    var contador = document.getElementById("contadorP");
    var divs = document.querySelectorAll('p').length;
    contador.textContent = divs;
}

function obtenerUL() {
    var contador = document.getElementById("contadorUL");
    var divs = document.querySelectorAll('ul').length;
    contador.textContent = divs;
}

function obtenerLI() {
    var contador = document.getElementById("contadorLI");
    var divs = document.querySelectorAll('li').length;
    contador.textContent = divs;
}

function obtenerOL() {
    var contador = document.getElementById("contadorOL");
    var divs = document.querySelectorAll('ol').length;
    contador.textContent = divs;
}

