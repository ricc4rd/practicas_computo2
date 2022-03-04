<?php
// Comentario de una linea

$nombre = "Ricardo";
echo "Welcome " . $nombre;

// evaluar
if(isset($_POST["enviar"])){
   $seleccion = $_POST["seleccion"];
   INCLUDE $seleccion . ".php";
}else{
    INCLUDE "es.php";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method= "POST">
    <select name="seleccion" id="">
    <option value="en">English</option>
    <option value="es">Spanish</option>
    </select>
    <input type = "submit" name = "enviar" value= "Cambiar" >
    </form>
    <h1> <?php echo TITLE;?> </h1>
    <h1> <?php echo SUBTITLE;?> </h1>

</body>
</html>