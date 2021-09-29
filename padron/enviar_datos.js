var datos_form = document.getElementById("form_datos");
var respuesta = document.getElementById("respuesta");

datos_form.addEventListener("submit", function(e){
    e.preventDefault();

    var datos = new FormData(datos_form);
    
    fetch("verificar_datos.php",{
        method: "POST",
        body: datos
    })
        .then ( res => res.json())
        .then ( data => {
            
            if(data === "error"){
                respuesta.innerHTML = `<div class="alert alert-danger" role="alert"> Por favor, llene correctamente todos los campos. </div>`
            }else{
                respuesta.innerHTML = `<div>
                
                <table width='80%' border=0>

                <tr bgcolor='#CCCCCC'>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Colegio</th>
                    <th>Numero</th>
                    <th>Direccion</th> 
                </tr>

                <tr>
                    <td>`+data.nombre+`</td>
                    <td>`+data.apellido+`</td>
                    <td>`+data.colegio+`</td>
                    <td>`+data.numero+`</td>
                    <td>`+data.direccion+`</td>
                </tr>

                </table>
                </div>`

            }
        })
})