<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Jugador</title>
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
            <h1 class="titulo">Agregar</h1>
        </div>
    </header>
    <section>
        <div class="contenedor contenido">
            <div class="content">
                <div class="equipos">
                    <h1>Agregar Jugador</h1>
                    <form class="formulario" action="procesarAgregarJugador.php" method="POST">
                        <input type="text" name="Nombre" id="nombre" placeholder="Nombre" required class="correoContacto" value="">
                        <input type="text" name="apellidoPaterno" placeholder="Apellido Paterno" required class="correoContacto" value="">
                        <input type="text" name="apellidoMaterno" placeholder="Apellido Materno" required class="correoContacto" value="">
                        <input type="number" name="Edad" placeholder="Edad" required class="correoContacto" value="">
                        <button type="submit" id="btnEnviar" name="agregar">Agregar</button>
                    </form>
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