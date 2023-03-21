<?php
    session_start();

    if(isset($_SESSION['correo'])){
        header("index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form action="inicio.php"  method="post">

       <p>INICIO SESION</p> 

       <div class="input-f">
            <input type="text" name="correo" placeholder="Correo">
       </div>

       <div class="input-f">
            <input type="password" name="clave" placeholder="Clave">
       </div>
       
       <input class="btn" type="submit" name="iniciar" value="iniciar">
       <br>
       <a href="registro.php">Registrar</a>
    </form>

</body>
</html>