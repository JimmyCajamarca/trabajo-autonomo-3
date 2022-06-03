//JavaScript
function establecerResultado(value) {
    document.getElementById('Resultado').innerHTML = value;
}

function obtenerResultado() {
    return(document.getElementById('Resultado').innerHTML);
}

function anadir(Valor) { 
    var resultado = obtenerResultado();
    if (resultado!='0' || isNaN(Valor)){
        establecerResultado(resultado + Valor);   
    }
    else establecerResultado(Valor);
}

function calcular() {
    var resultado = eval(obtenerResultado()); 
    establecerResultado(resultado);
}

function borrar() { 
    establecerResultado(0);
}