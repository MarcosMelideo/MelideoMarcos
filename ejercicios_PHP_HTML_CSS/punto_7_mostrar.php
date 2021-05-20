<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = $_POST["nombre"];
        $mail = $_POST["mail"];
        $mensaje =  $_POST["mensaje"];
    ?>  

    <td>
        <h2  style="color: white; background-color: black; text-align: center;">
            <?php echo $nombre ?>
        </h2>
        <h3 style="text-align: center;">
            <?php echo $mail ?>
        </h3>
        <label for="mensaje" style="vertical-align: top;">
            Mensaje:
        </label>    
        <textarea name="mensaje" rows="20" cols="50">
            <?php echo $mensaje ?>
        </textarea>
    <td>

</body>
</html>