function cargar() {

    let pais_sl = document.getElementById("pais").value;
    let prov_sl = document.getElementById("provincias");

    let xhr = new XMLHttpRequest();
    xhr.open ("GET", "datos.php?pais="+pais_sl, true);
    
    
    if (prov_sl.length>0) {
     prov_sl.length=0; 	
    }

     xhr.onload = function(){
         if(conexion.status === 200){
             
         let json = JSON.parse(xhr.responseText);
         
         if (pais_sl=='Argentina') {
             for (var i = 0; i < 23; i++) {
                 var option=document.createElement("option");
                 option.value=json[i];
                 option.text=json[i];
                 prov_sl.appendChild(option);
             }
         }else{
             for (var i = 0; i < 19; i++) {
                 var option=document.createElement("option");
                 option.value=json[i];
                 option.text=json[i]; 
                 prov_sl.appendChild(option);
             }
         }

         console.log(pais_sl);
         console.log(json);
         }
         
     }

     conexion.send();
 }