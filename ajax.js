document.querySelector('#boton').addEventListener('click', traerDatos);

function traerDatos(){
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'Horario.json', true);
    xhttp.send();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let datos = JSON.parse(this.responseText);
            let res = document.querySelector('#res');
            res.innerHTML = '';
            for(let item of datos){
                res.innerHTML += `
                <tr>
                    <td>${item.hora}</td>
                    <td>${item.lunes}</td>
                    <td>${item.martes}</td>
                    <td>${item.miercoles}</td>
                    <td>${item.jueves}</td>
                    <td>${item.viernes}</td>
                </tr>
                `
            }
        }
    }
}