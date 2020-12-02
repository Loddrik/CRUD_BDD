<?php
include_once '../header.php';
include_once '../conexion2.php';

$id = $_POST['id'];




$sentencia = $base_de_datos->prepare("DELETE FROM sala where id_sala = (?);");
$resultado = $sentencia->execute([$id]);



if($resultado == true){
    echo "<h3>Operacion realizada con exito</h3>";
    header('Location: ../index.php');
} else{
    echo "<h3>Ha ocurrido un error</h3>";
}   
?>