<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Torneo futbol - Información y Contacto</title>
    <link rel="stylesheet" href="CSS/acercaDe.css">
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logotipo">
                <a href="index.php">
                    <img src="Imagenes/logoFutbol.png" alt="Logo">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php"><b>Inicio</b></a></li>
                    <li><a href="Equipos.php"><b>Equipos</b></a></li>
                    <li><a href="jugadores.php"><b>Jugadores</b></a></li>
                    <li><a href="resultados.php"><b>Resultados</b></a></li>
                    <li><a href="acercaDe.php"><b>Acerca de</b></a></li>
                    <?php
                    if(isset($_SESSION['admin'])){
                        echo "<li><a href='cerrar_sesion.php'><b>Cerrar sesión</b></a></li>";
                    }
                    else {
                        echo "<li><a href='administrador.php'><b>Administrador</b></a></li>";
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <div class="contenedor contenido">
            <div class="content">
                <div class="acercaDe">
                    <h1>Acerca de</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and <br>type setting industry.</p>
                </div>
                <div class="contacto">
                    <h1>Contacto</h1>
                    <article class="formulario">
                        <input type="text" name="Nombre" placeholder="Nombre" required class="correoContacto">
                        <input type="email" name="Correo" placeholder="Correo" required class="correoContacto">
                        <input type="text" name="Asunto" placeholder="Asunto" required class="correoContacto">
                        <textarea type="text" name="texto" placeholder="Escribe algo..." required id="textoCorreo"></textarea>
                        <button type="submit" id="btnEnviar">Contactar</button>
                    </article>
                    <aside class="infoContacto">
                        <h1>Dirección</h1>
                        <p>Blvd. Luis Donaldo Colosio<br> Km 13.5 M 2 Zona 8 SM 299,<br> Carr. Cancún - Tulum, 77565<br> Cancún Q.Roo</p>
                        <h2>Email</h2>
                        <a href="#" class="links">info@email.com</a>
                        <h3>Teléfono</h3>
                        <a href="#" class="links">+52 998 547 93 41</a>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div id="derechos">
            <p>2022 @ Todos los Derechos Reservados</p>
        </div>
    </footer>
</body>
</html>