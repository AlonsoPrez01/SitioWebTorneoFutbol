<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Resultado</title>
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
            <h1 class="titulo" style="margin-left: 375px;">Editar Resultado</h1>
        </div>
    </header>
    <section>
        <div class="contenedor contenido">
            <div class="content">
                <div class="equipos">
                    <h1>Editar Resultado</h1>
                    <form class="formulario" action="procesarEditarResultado.php" method="POST">
                        <input type="text" name="eLocal" id="eLocal" placeholder="Equipo Local" required class="correoContacto" value="">
                        <input type="number" name="gLocal" placeholder="Goles anotados (Local)" required class="correoContacto" value="">
                        <input type="text" name="eVisitante" placeholder="Equipo Visitante" required class="correoContacto" value="">
                        <input type="number" name="gVisitante" placeholder="Goles anotados (Visitante)" required class="correoContacto" value="">
                        <button type="submit" id="btnEnviar" name="editar">Editar</button>
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