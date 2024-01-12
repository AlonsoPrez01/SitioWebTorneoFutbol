<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Torneo futbol - Equipos</title>
    <link rel="stylesheet" href="CSS/Equipos.css">
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
                <div class="equipos">
                    <table>
                        <thead>
                            <tr>
                                <th>No. Equipo</th>
                                <th>Equipo</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                require_once('conexionTorneo.php');
                                $sql = "SELECT * FROM Equipos";
                                $consulta = $conexion -> prepare($sql);
                                $consulta -> execute();
                                $resultado = $consulta -> fetchAll(PDO::FETCH_OBJ);
                                if($consulta -> rowCount() > 0){
                                    foreach($resultado as $registro){
                                        echo "
                                                <tr>
                                                    <td>".$registro->Id_equipo."</td>
                                                    <td>".$registro->NombreEquipo."</td>
                                                </tr>";
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
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