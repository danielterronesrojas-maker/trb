<!DOCTYPE html>
<html lang="en">
<head>
    <title>Programa YA</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <p class="logo">Programa YA</p>
            <nav>
                <a href="#somos-proya">Quienes somos</a> 
                <a href="#nuestros-programas">Sobre nosotros</a> 
                <a href="#caracteristicas">Caracteristicas</a>
            </nav>
        </div>
    </header>

    <section id="hero">
        <h1>Aprende a programar <br> con los mejores</h1>
        <form action="https://youtube.com" target="_blank">
            <button id="colt">Aplica YA</button>
        </form>
    </section>

    <section id="somos-proya">
        <div class="container">
            <h2>Somos <span id="gray">Programa YA</span></h2>
            <p id="bull">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel repellendus accusamus rerum alias, consequuntur error illo architecto rem placeat neque deserunt voluptas dicta ea eaque eligendi magni beatae nostrum tempora.</p>
        </div>
    </section>

    <section id="nuestros-programas">
        <div class="container">
            <h2>Nuestros Programas</h2>
            <div class="programas">
                <div class="carta">
                    <h3>Programador Front</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ab non ipsam voluptates dolor atque in sequi sint a corporis optio eius quia modi similique molestiae, assumenda eveniet commodi quisquam.</p>
                    <button>Mas informacion</button>
                </div>
                <div class="carta">
                    <h3>Programador Back</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ab non ipsam voluptates dolor atque in sequi sint a corporis optio eius quia modi similique molestiae, assumenda eveniet commodi quisquam.</p>
                    <button>Mas informacion</button>
                </div>
                <div class="carta">
                    <h3>Programador Full Stack</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ab non ipsam voluptates dolor atque in sequi sint a corporis optio eius quia modi similique molestiae, assumenda eveniet commodi quisquam.</p>
                    <button>Mas informacion</button>
                </div>
            </div>
        </div>
    </section>


    <section id="caracteristicas">
        <div class="container">
            <ul>
                <li>100 en linea</li>
                <li>Flexibilidad de horarios</li>
                <li>Soporte 1 a 1</li>
                <li>Asistencia Financiera</li>
            </ul>
        </div>
        
    </section>

    <section id="aplica-ya">
        <h2>Listo para programar?</h2>
        <form method="post">
            <h2>Bienvenido</h2>
            <div class="mandy">

                <div class="mortis">
                    <input type="text" name="name" placeholder="Nombre">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="mortis">
                    <input type="password" name="password" id="password" placeholder="Contraseña">
                    <i class="fa-solid fa-key"></i>
                    <button type="button" onclick="mostrar_contrasena()" class="ojo">
                        <i id="eye_icon" class="fa-solid fa-eye"></i>
                    </button>
                </div>

                <script>
                function mostrar_contrasena(){
                    const password_input = document.getElementById("password");
                    const eye_icon = document.getElementById("eye_icon");

                    if(password_input.type === "password"){
                        password_input.type = "text";
                        eye_icon.classList.remove("fa-eye");
                        eye_icon.classList.add("fa-eye-slash");
                    }

                    else{
                        password_input.type="password";
                        eye_icon.classList.remove("fa-eye-slash");
                        eye_icon.classList.add("fa-eye");
                    }
                }
                </script>


                <div class="mortis">
                    <input type="text" name="correo" placeholder="Correo Electronico">
                    <i class="fa-solid fa-inbox"></i>
                </div>

                <div class="mortis">
                    <input type="text" name="telefono" placeholder="Telefono">
                    <i class="fa-solid fa-mobile"></i>
                </div>

                <a href="https://es.wikipedia.org/wiki/T%C3%A9rminos_y_condiciones_de_uso" target="_blank">Terminos y Condiciones</a>
                <input type="submit" name ="send" class="dandy" value="Registrarse">

            </div>
        </form>
    </section>

    <footer>
        <div class="container">
            <p>© 2023 Programa YA. Todos los derechos reservados.</p>
            <nav>
                <a href="https://es.wikipedia.org/wiki/Pol%C3%ADtica_de_privacidad" target="_blank">Politica de privacidad</a>
                <a href="https://policies.google.com/terms?hl=es" target="_blank">Terminos de servicio</a>
            </nav>
        </div>
    </footer>

    <?php
        include("send.php");
    ?>

</body>
</html>