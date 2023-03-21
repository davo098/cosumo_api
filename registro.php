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
    <form  method="post">

       <p>REGISTRAR</p> 

       <div class="input-f">
            <input type="text" name="nombre" placeholder="Nombre">
       </div>

       <div class="input-f">
            <input type="text" name="correo" placeholder="Correo">
       </div>

       <div class="input-f">
            <input type="password" name="clave" placeholder="Clave">
       </div>
       
       <input class="btn" type="submit" name="registrar" value="registrar">
       <br>
       <a href="login.php">Inicio sesion</a>
    </form>

    <?php
          include("registrar.php");
    ?>
</body>
</html>