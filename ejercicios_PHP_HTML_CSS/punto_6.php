<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form_cargar"  method ="POST" action="punto_6_mostrar.php">
        <br/>
        Nombre: <input type="text" name="nombre"> 
        <br/> <br/>
        Apellido: <input type="text" name="apellido">
        <br/> <br/>
        DNI: <input type="text" name="dni">
        <br/> <br/>
        Fecha de Ncimiento: <input type="text" name="fecha_nac">
        <br/> <br/>
        Mail: <input type="text" name="mail">
        <br/> <br/>

        <label for="provincia">Elija provincia:</label>

        <select name="provincia" id="provincia">
          <option value="Buenos Aires">Bs. As.</option>
          <option value="Catamarca">Catamarca</option>
          <option value="Chaco">Chaco</option>
          <option value="Chubut">Chubut</option>
          <option value="Cordoba">Cordoba</option>
          <option value="Corrientes">Corrientes</option>
          <option value="Entre Rios">Entre Rios</option>
          <option value="Formosa">Formosa</option>
          <option value="Jujuy">Jujuy</option>
          <option value="La Pampa">La Pampa</option>
          <option value="La Rioja">La Rioja</option>
          <option value="Mendoza">Mendoza</option>
          <option value="Misiones">Misiones</option>
          <option value="Neuquen">Neuquen</option>
          <option value="Rio Negro">Rio Negro</option>
          <option value="Salta">Salta</option>
          <option value="San Juan">San Juan</option>
          <option value="San Luis">San Luis</option>
          <option value="Santa Cruz">Santa Cruz</option>
          <option value="Santa Fe">Santa Fe</option>
          <option value="Sgo. del Estero">Sgo. del Estero</option>
          <option value="Tierra del Fuego">Tierra del Fuego</option>
          <option value="Tucuman">Tucuman</option>
        </select>
        <br/> <br/>
        ¿Es donante?</label>
        <br/> <br/>
        <input type="radio" id="si" name="donante" value="si">
        <label for="si">Si</label><br>
        <input type="radio" id="no" name="donante" value="no">
        <label for="no">No</label><br>
        <br/> 
        <input type="checkbox" id="acepta" name= "acepta_term"value="acepta terminos"> 
        <label for="acepta"> Aceptar terminos y condiciones </label><br>
        <br/> <br/>
        <input value="Guardar" type="submit"/>
    </form>
</body>
</html>



