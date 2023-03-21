<?php

session_start();

include("conexion.php");


$correo=$_POST['correo'];
$clave=$_POST['clave'];

$consulta = "SELECT * FROM usuario WHERE correo = '$correo' AND clave = md5('$clave')";
$resultado=mysqli_query($con,$consulta);

$filas=mysqli_num_rows($resultado);
$_SESSION['correo']= $correo;

if($filas){
    header("location:index.php");
}
else{
    include("login.php");
    ?>
    <h1> Error</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($con);
?>