<?php
include_once('conexionTorneo.php');
try{
    if(isset($_POST['editar'])){
        $local = $_POST['eLocal'];
        $glocal = $_POST['gLocal'];
        $visitante = $_POST['eVisitante'];
        $gVisitante = $_POST['gVisitante'];
        $sql = "update ultimoJuego set equipoLocal=:eLocal, golesLocal=:gLocal, equipoVisitante=:eVisitante, golesVisitante=:gVisitante";
        $sql = $conexion->prepare("$sql");

        $sql->bindParam(':eLocal', $local);
        $sql->bindParam(':gLocal', $glocal);
        $sql->bindParam(':eVisitante', $visitante);
        $sql->bindParam(':gVisitante', $gVisitante);

        $sql->execute();

        header('location:resultados.php');
    }
}
catch(Exception $e){
    echo "Hubo un error al momento de procesar";
}
?>