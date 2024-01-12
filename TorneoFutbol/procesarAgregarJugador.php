<?php
include_once('conexionTorneo.php');
try{
    if(isset($_POST['agregar'])){
        $nombre = $_POST['Nombre'];
        $aPaterno = $_POST['apellidoPaterno'];
        $aMaterno = $_POST['apellidoMaterno'];
        $edad = $_POST['Edad'];
        $sql = "CALL agregarJugador(:Nombre, :apellidoPaterno, :apellidoMaterno, :Edad);";
        $sql = $conexion->prepare("$sql");

        $sql->bindParam(':Nombre', $nombre);
        $sql->bindParam(':apellidoPaterno', $aPaterno);
        $sql->bindParam('apellidoMaterno', $aMaterno);
        $sql->bindParam(':Edad', $edad);

        $sql->execute();

        header('location:jugadores.php');
    }
}
catch(Exception $e){
    echo $e;
}
?>