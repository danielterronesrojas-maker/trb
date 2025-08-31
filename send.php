<?php

include("connection.php");

if(isset($_POST['send'])) {     
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['password']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['telefono']) >= 1
    ) {
        $name = trim($_POST['name']);
        $password = trim($_POST['password']);
        $correo = trim($_POST['correo']);
        $telefono = trim($_POST['telefono']);   
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos (name, password, correo, telefono, fecha) 
                     VALUES ('$name', '$password', '$correo', '$telefono', '$fecha')";
        $resultado = mysqli_query($connection, $consulta);
        if($resultado){
            ?>
            <h3 class="success">¡Te has registrado correctamente!</h3>
            <?php
        } else {
            ?>
            <h3 class="error">¡Ups ha ocurrido un error!</h3>
            <?php
        }
    }
}