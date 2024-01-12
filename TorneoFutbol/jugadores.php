<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Torneo futbol - Jugadores</title>
    <link rel="stylesheet" href="CSS/jugadores.css">
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
                <div class="equipos" style="margin-top: 5px;">
                    <table>
                        <thead>
                            <tr>
                                <th>Id Jugador</th>
                                <th>Nombre</th>
                                <th>Edad</th>
                                <?php
                                if (isset($_SESSION['admin'])){
                                    echo "<th colspan='2'>Acción</th>";
                                }
                                else {

                                }
                                ?>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                require_once('conexionTorneo.php');
                                $sql = "SELECT * FROM Jugadores WHERE Estado=1";
                                $consulta = $conexion -> prepare($sql);
                                $consulta -> execute();
                                $resultado = $consulta -> fetchAll(PDO::FETCH_OBJ);
                                $i = 1;
                                if($consulta -> rowCount() > 0){
                                    foreach($resultado as $registro){
                                        echo "
                                                <tr>
                                                    <td>".$i++."</td>
                                                    <td>".$registro->Nombre." ".$registro->ApellidoPaterno." ".$registro->ApellidoMaterno."</td>
                                                    <td>".$registro->Edad."</td>";
                                                    if(isset($_SESSION['admin'])){
                                                    echo "
                                                    <td><a href='editarJugador.php?id=".$registro->Id_Jugador."'>Editar</a></td>
                                                    <td><a onclick='eliminar(".$registro->Id_Jugador.")'>Eliminar</a></td>
                                                </tr>";
                                                    }
                                                    else {

                                                    }
                                                    
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                    <?php
                    if(isset($_SESSION['admin'])){
                        echo "<a href='agregarJugador.php' id='btnAgregar'>Agregar</a>";
                    }
                    else {

                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div id="derechos">
            <p>2022 @ Todos los Derechos Reservados</p>
        </div>
    </footer>
    <script>
        function eliminar(valor){
            if (confirm("Desea eliminar el jugador(Id Jugador) " + valor)){
                location.href="eliminar_jugador.php?id=" + valor;
            }
        }
    </script>
</body>
</html>