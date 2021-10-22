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
                respuesta.innerHTML = `<div class="alert alert-danger" role="alert"> DNI no encontrado. </div>`
            }else{
                var fechaDeNacimiento = new Date(data.fec_nac);
                var hoy = new Date();
                var edad = parseInt((hoy - fechaDeNacimiento) / (1000*60*60*24*365));
                var sexo = "bgcolor='FFFFFF'";
                switch (data.sexo) {
                    case "f":
                        sexo = "bgcolor='3346FF'";
                    break;

                    case "m":
                        sexo = "bgcolor='1DE12F'";
                    break;
                }

                respuesta.innerHTML = `<div>
                
                <table width='80%' border=0>
               
                <tr `+sexo+`>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                </tr>

                <tr `+sexo+`>
                    <td>`+data.nombre+`</td>
                    <td>`+data.apellido+`</td>
                    <td>`+edad+`</td>
                </tr>

                </table>
                </div>`
        }
    })


})
