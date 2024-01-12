<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Torneo futbol - Administrador</title>
    <link rel="stylesheet" href="CSS/administrador.css">
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
                <div class="login">
                    <h1>Administrador</h1>
                    <?php
                        if(isset($_GET['error'])){
                        echo "<div class='msgError'>".$_GET['error']."</div>";
                        }
                    ?>
                    <div class="loginAdmin">
                        <form action="validarAdmin.php" method="POST">
                            <input type="text" name="userAdmin" placeholder="Usuario" class="mailAdmin">
                            <input type="password" name="contraAdmin" placeholder="Contraseña" class="mailAdmin">
                            <button type="submit" id="btnIngresar" name="ingresarAdmin">Ingresar</button>
                        </form>
                    </div>
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