<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <form method="post">
        <h2>Bienvenido</h2>
        <div class="mandy">

            <div class="mortis">
                <input type="text" name="name" placeholder="Nombre">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="mortis">
                <input type="text" name="password" placeholder="Contraseña">
                <i class="fa-solid fa-key"></i>
            </div>

            <div class="mortis">
                <input type="text" name="correo" placeholder="Correo Electronico">
                <i class="fa-solid fa-inbox"></i>
            </div>

            <div class="mortis">
                <input type="text" name="telefono" placeholder="Telefono">
                <i class="fa-solid fa-mobile"></i>
            </div>

            <a href="#">Terminos y Condiciones</a>
            <input type="submit" name ="send" class="dandy" value="Registrarse">

        </div>
    </form>

    <?php
        include("send.php");
    ?>
    
</body>
</html>