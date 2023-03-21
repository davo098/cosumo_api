<?php

include("conexion.php");

if(isset($_POST['registrar'])){
    if(strlen($_POST['nombre']) >=1 &&
       strlen($_POST['correo']) >=1 &&
       strlen($_POST['clave']) >=1 
       
    ){
        $nombre=trim($_POST['nombre']);
        $correo=trim($_POST['correo']);
        $clave=trim ($_POST['clave']);
         
        $consulta = "INSERT INTO usuario (nombre,correo,clave) VALUES ('$nombre','$correo',md5('$clave'))";
       
        $resultado = mysqli_query($con,$consulta);
        if($resultado){
            ?>
            <h3 class="success"> Registrado</h3>
            <?php
        }
        else{
            ?>
            <h3 class="error"> No se pudo registrar</h3>
            <?php
        }
    }else{
        ?>
        <h3 class="error"> Los campos estan vacidos</h3>
        <?php
    }
}

?>