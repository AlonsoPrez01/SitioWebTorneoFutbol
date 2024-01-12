<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Torneo futbol - Resultados</title>
    <link rel="stylesheet" href="CSS/resultados.css">
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
                    <?php
                    if(isset($_SESSION['admin'])){
                        echo "<a href='editarResultado.php' id='btnAgregar' style='margin-left: 100px;'>Editar</a>";
                    }
                    else {
                        
                    }
                    ?>
                </div>
                <div class="proximosPartidos">
                    <h1>Siguiente partido</h1>
                    <article class="equipoUno">
                        <img src="Imagenes/logo_2.png" alt="Equipo_Local">
                        <?php
                        require_once('conexionTorneo.php');
                        $sql = "SELECT eLocal FROM proximoJuego";
                        $consulta = $conexion -> prepare($sql);
                        $consulta -> execute();
                        $resultado = $consulta -> fetchAll(PDO::FETCH_OBJ);
                        if($consulta -> rowCount() > 0){
                            foreach($resultado as $registro){
                                echo
                                "<h3 style='text-align: center;'>".$registro->eLocal."</h3>";
                            }
                        }
                        ?>
                    </article>
                    <article class="equipoDos">
                        <img src="Imagenes/logo_1.png" alt="Equipo_Visitante">
                        <?php
                        require_once('conexionTorneo.php');
                        $sql = "SELECT eVisitante FROM proximoJuego";
                        $consulta = $conexion -> prepare($sql);
                        $consulta -> execute();
                        $resultado = $consulta -> fetchAll(PDO::FETCH_OBJ);
                        if($consulta -> rowCount() > 0){
                            foreach($resultado as $registro){
                                echo
                                "<h3 style='text-align: center;'>".$registro->eVisitante."</h3>";
                            }
                        }
                        ?>
                    </article>
                    <?php
                    if(isset($_SESSION['admin'])){
                        echo "<a href='editarProximo.php' id='btnAgregar' style='margin-left: 100px;'>Editar</a>";
                    }
                    else {

                    }
                    ?>
                    <div id="versus">
                       <h1>VS</h1>
                       <h2>Liga de Campeones</h2>
                       <h3>May 21, 2022</h3>
                       <p>17:30</p>
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