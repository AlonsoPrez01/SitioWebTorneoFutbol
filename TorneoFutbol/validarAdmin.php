<?php
session_start();
include_once('conexionTorneo.php');
// isset evalua si una variable esta definida o no.
if(isset($_POST['ingresarAdmin'])){
    // Recuperamos del formulario
    // Trim quita espacios en blanco
    $email=trim($_POST['userAdmin']);
    $contrasennia=trim(sha1($_POST['contraAdmin']));
    // Escribimos la consulta
    $consulta ="select * from Administrador where UserAdmin=:userAdmin and ContraAdmin=:contraAdmin";
    echo $consulta;
    // Pasamos la consulta a la conexión
    $sql = $conexion->prepare($consulta);
    // Evitamos hackings
    $sql->bindParam(':userAdmin',$email);
    $sql->bindParam(':contraAdmin',$contrasennia);
    // Ejecutamos la consulta
    $sql->execute();
    if($sql->rowCount()>0){
        $_SESSION['admin']=$email;
        header('location:index.php');
    } else{
        header('location:administrador.php?error=Usuario no encontrado');
    }
}
?>