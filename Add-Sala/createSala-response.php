<?php
include_once '../header.php';
include_once '../conexion2.php';

$id = $_POST['id_sala'];
$nombre = $_POST['nombre'];
$capacidad = $_POST['capacidad'];

$sentencia = $base_de_datos->prepare("INSERT INTO sala(id_sala,nombre_sala, capacidad_sala) VALUES (?, ?,?);");
$resultado = $sentencia->execute([$id,$nombre,$capacidad]);

if($resultado){
    header('Location: ../index.php');
    
    
}else{
    echo "<h1>Ha ocurrido un error</h1>";
}
?>