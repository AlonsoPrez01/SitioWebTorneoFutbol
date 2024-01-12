<?php
include_once('conexionTorneo.php');
try{
    if(isset($_POST['editar'])){
        $local = $_POST['eLocal'];
        $visitante = $_POST['eVisitante'];
        $sql = "update proximoJuego set eLocal=:eLocal, eVisitante=:eVisitante";
        $sql = $conexion->prepare("$sql");

        $sql->bindParam(':eLocal', $local);
        $sql->bindParam(':eVisitante', $visitante);

        $sql->execute();

        header('location:resultados.php');
    }
}
catch(Exception $e){
    echo "Hubo un error al momento de procesar";
}
?>