var datos_form = document.getElementById("form_login");
var respuesta = document.getElementById("respuesta");


datos_form.addEventListener("submit", function(e){
    e.preventDefault();

    var datos = new FormData(datos_form);

    fetch("post.php",{
        method: "POST",
        body: datos
    })
        .then ( res => res.json())
        .then ( data => {
            if(data === "error"){
                respuesta.innerHTML = `<div class="alert alert-danger" role="alert"> Por favor, llene todos los campos. </div>`
            }else{
                console.log(data)
                respuesta.innerHTML = `<div class="alert alert-success" role="alert"> ${data} </div>`
                
            }
        })
})