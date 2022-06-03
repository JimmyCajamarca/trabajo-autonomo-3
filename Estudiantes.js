//LEER XML AJAX
/*
function ejecutar() {
    var resultado = document.getElementById("info");
    var arr = [];
    if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            if(xmlhttp.responseXML !== null){
                arr[0] = xmlhttp.responseXML.getElementsByTagName("cedula").item(0);
                arr[1] = xmlhttp.responseXML.getElementsByTagName("nombre").item(0);
            
                resultado.innerHTML = "El estudiante tiene como cedula " + arr[0].firstChild.nodeValue + " y su nombre es "+ arr[1].firstChild.nodeValue;
            }
        }
    }
    xmlhttp.open("GET", "Estudiantes.xml", true);
    xmlhttp.send();
}
*/

function auto(str) {
    if(str.length == 0) {
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200){
                console.log(this.responseText);
                var opciones = document.getElementById('Estudiantes').getElementsByTagName('option');
                var nombres = [];
                for (i = 0; i < opciones.length; i+=1){
                    nombres.push(opciones[i].value);
                }

                var listado = document.getElementById('Estudiantes');
                var nombre = this.responseText;
                var option = document.createElement('option');
                option.value = this.responseText;

                if(nombres.indexOf(nombre) ===-1){
                    listado.append(option);
                }
                
            }
        };
        xmlhttp.open("GET", "Buscar.php?q=" + str, true);
        xmlhttp.send();
    }
}


    