<?php
include_once '../header.php';
include_once '../conexion2.php';

$id = $_POST['id'];
$plan = $_POST['plan'];



$sentencia = $base_de_datos->prepare("DELETE FROM persona where id_persona = (?);");
$resultado = $sentencia->execute([$id]);

$sentencia2 = $base_de_datos->prepare("DELETE FROM plan where id_plan = (?);");
$resultado2 = $sentencia2->execute([$plan]);

if($resultado && $resultado2){
    echo "<h3>Operacion realizada con exito</h3>";
    header('Location: ../index.php');
} else{
    echo "<h3>Ha ocurrido un error</h3>";
}   
?>