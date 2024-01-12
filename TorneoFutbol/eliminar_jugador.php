<?php
require_once('conexionTorneo.php');
if (isset($_GET['id'])){
    $elID = $_GET['id'];
    $consulta ="update Jugadores set Estado=0 where Id_Jugador=:elid";
    $sql = $conexion->prepare($consulta);
    $sql->bindParam(':elid',$elID);
    $sql->execute();
    header('location:jugadores.php');
}
?>