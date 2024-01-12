<?php
include_once('conexionTorneo.php');
try{
    if(isset($_POST['editar'])){
        $id = $_POST['id'];
        $nombre = $_POST['Nombre'];
        $aPaterno = $_POST['apellidoPaterno'];
        $aMaterno = $_POST['apellidoMaterno'];
        $edad = $_POST['Edad'];
        $sql = "update Jugadores set Nombre=:Nombre, ApellidoPaterno=:apellidoPaterno, ApellidoMaterno=:apellidoMaterno, Edad=:Edad where Id_Jugador=:id";
        $sql = $conexion->prepare("$sql");

        $sql->bindParam(':id', $id);
        $sql->bindParam(':Nombre', $nombre);
        $sql->bindParam(':apellidoPaterno', $aPaterno);
        $sql->bindParam(':apellidoMaterno', $aMaterno);
        $sql->bindParam(':Edad', $edad);

        $sql->execute();

        header('location:jugadores.php');
    }
}
catch(Exception $e){
    echo "Hubo un error al momento de procesar";
}
?>