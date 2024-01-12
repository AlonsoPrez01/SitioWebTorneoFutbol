<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Jugador</title>
    <link rel="stylesheet" href="CSS/jugadores.css">
    <link rel="stylesheet" href="CSS/paginaAcciones.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logotipo">
                <a href="index.html">
                    <img src="Imagenes/logoFutbol.png" alt="Logo">
                </a>
            </div>
            <h1 class="titulo">Editar</h1>
        </div>
    </header>
    <section>
        <div class="contenedor contenido">
            <div class="content">
                <div class="equipos">
                <?php
                    require_once('conexionTorneo.php');
                    if (isset($_GET['id'])){
                        $elID = $_GET['id'];
                        $consulta ="select * from Jugadores where Id_Jugador=:elid";
                        $sql = $conexion->prepare($consulta);
                        $sql->bindParam(':elid',$elID);
                        $sql->execute();
                        $resultado = $sql->fetchAll(PDO::FETCH_OBJ);
                        if($sql->rowCount()>0){
                            $Nombre = $resultado[0]->Nombre;
                            $aPaterno = $resultado[0]->ApellidoPaterno;
                            $aMaterno = $resultado[0]->ApellidoMaterno;
                            $Edad = $resultado[0]->Edad;
                
        ?>
                    <h1>Editar Jugador</h1>
                    <form class="formulario" action="procesarEditarJugador.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $elID ?>">
                        <input type="text" name="Nombre" id="nombre" placeholder="Nombre" required class="correoContacto" value="<?php echo $Nombre ?>">
                        <input type="text" name="apellidoPaterno" placeholder="Apellido Paterno" required class="correoContacto" value="<?php echo $aPaterno ?>">
                        <input type="text" name="apellidoMaterno" placeholder="Apellido Materno" required class="correoContacto" value="<?php echo $aMaterno ?>">
                        <input type="number" name="Edad" placeholder="Edad" required class="correoContacto" value="<?php echo $Edad ?>">
                        <button type="submit" id="btnEnviar" name="editar">Editar</button>
                    </form>
                </div>
                <?php
        }
                
    }
        ?>
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