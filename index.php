<?php
  session_start();
  if(!isset($_SESSION['correo'])){
    echo '<script>alert("Debe iniciar sesion");  window.location = "login.php";</script>';
    session_destroy();
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>


<body>
  <h1 class="title">Consumiendo la API de Pokeapi</h1>
<a href="cerrar.php">Cerrar</a>
  <div class="contenedor" id="contenedor"></div>
  <div class="botones" id="botones"></div>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script type="text/javascript" src="index.js"></script>
</body>

</html>