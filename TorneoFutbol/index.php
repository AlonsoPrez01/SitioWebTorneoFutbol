<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Torneo futbol</title>
    <link rel="stylesheet" href="CSS/index.css">
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
        <div class= "contenedor contenido">
            <div class="content">
                <h1>Vive la emoción del futbol! <br>¡Registra tu equipo y demuestra quien es el más preparado!</h1>
                <div id="btnsRegistroInformacion">
                    <a href="#" class="boton rojo" style="font-style: normal;">Registrate</a>
                    <a href="acercaDe.php" class="boton blanco" style="font-style: normal;">Más Información</a>
                </div>
                <div class="marcador">
                    <h1>Último partido</h1>
                    <article class="equipoUno">
                        <img src="Imagenes/logo_1.png" alt="Equipo_1">
                        <?php
                        require_once('conexionTorneo.php');
                        $sql = "SELECT equipoLocal, golesLocal FROM ultimoJuego";
                        $consulta = $conexion -> prepare($sql);
                        $consulta -> execute();
                        $resultado = $consulta -> fetchAll(PDO::FETCH_OBJ);
                        if($consulta -> rowCount() > 0){
                            foreach($resultado as $registro){
                                echo
                                "<h3>".$registro->equipoLocal."</h3>
                                <h4>".$registro->golesLocal."</h4>";
                            }
                        }
                        ?>
                    </article>
                    <article class="equipoDos">
                        <img src="Imagenes/logo_2.png" alt="Equipod_2">
                        <?php
                        require_once('conexionTorneo.php');
                        $sql = "SELECT equipoVisitante, golesVisitante FROM ultimoJuego";
                        $consulta = $conexion -> prepare($sql);
                        $consulta -> execute();
                        $resultado = $consulta -> fetchAll(PDO::FETCH_OBJ);
                        if($consulta -> rowCount() > 0){
                            foreach($resultado as $registro){
                                echo
                                "<h3>".$registro->equipoVisitante."</h3>
                                <h4>".$registro->golesVisitante."</h4>";
                            }
                        }
                        ?>
                    </article>
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